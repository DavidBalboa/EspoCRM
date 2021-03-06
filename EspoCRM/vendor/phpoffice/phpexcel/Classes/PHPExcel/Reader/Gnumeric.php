<?php
/**
 * \PhpOffice\PhpSpreadsheet\Spreadsheet
 *
 * Copyright (c) 2006 - 2014 \PhpOffice\PhpSpreadsheet\Spreadsheet
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   \PhpOffice\PhpSpreadsheet\Spreadsheet
 * @package    \PhpOffice\PhpSpreadsheet\Spreadsheet_Reader
 * @copyright  Copyright (c) 2006 - 2014 \PhpOffice\PhpSpreadsheet\Spreadsheet (http://www.codeplex.com/\PhpOffice\PhpSpreadsheet\Spreadsheet)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */


/** \PhpOffice\PhpSpreadsheet\Spreadsheet root directory */
if (!defined('PHPEXCEL_ROOT')) {
	/**
	 * @ignore
	 */
	define('PHPEXCEL_ROOT', dirname(__FILE__) . '/../../');
	require(PHPEXCEL_ROOT . '\PhpOffice\PhpSpreadsheet\Spreadsheet/Autoloader.php');
}

/**
 * \PhpOffice\PhpSpreadsheet\Reader\Gnumeric
 *
 * @category	\PhpOffice\PhpSpreadsheet\Spreadsheet
 * @package		\PhpOffice\PhpSpreadsheet\Spreadsheet_Reader
 * @copyright	Copyright (c) 2006 - 2014 \PhpOffice\PhpSpreadsheet\Spreadsheet (http://www.codeplex.com/\PhpOffice\PhpSpreadsheet\Spreadsheet)
 */
class \PhpOffice\PhpSpreadsheet\Reader\Gnumeric extends \PhpOffice\PhpSpreadsheet\Reader\BaseReader implements \PhpOffice\PhpSpreadsheet\Reader\IReader
{
	/**
	 * Formats
	 *
	 * @var array
	 */
	private $_styles = array();

	/**
	 * Shared Expressions
	 *
	 * @var array
	 */
	private $_expressions = array();

	private $_referenceHelper = null;


	/**
	 * Create a new \PhpOffice\PhpSpreadsheet\Reader\Gnumeric
	 */
	public function __construct() {
		$this->_readFilter 	= new \PhpOffice\PhpSpreadsheet\Reader\DefaultReadFilter();
		$this->_referenceHelper = \PhpOffice\PhpSpreadsheet\ReferenceHelper::getInstance();
	}


	/**
	 * Can the current \PhpOffice\PhpSpreadsheet\Reader\IReader read the file?
	 *
	 * @param 	string 		$pFilename
	 * @return 	boolean
	 * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public function canRead($pFilename)
	{
		// Check if file exists
		if (!file_exists($pFilename)) {
			throw new \PhpOffice\PhpSpreadsheet\Reader\Exception("Could not open " . $pFilename . " for reading! File does not exist.");
		}

		// Check if gzlib functions are available
		if (!function_exists('gzread')) {
			throw new \PhpOffice\PhpSpreadsheet\Reader\Exception("gzlib library is not enabled");
		}

		// Read signature data (first 3 bytes)
		$fh = fopen($pFilename, 'r');
		$data = fread($fh, 2);
		fclose($fh);

		if ($data != chr(0x1F).chr(0x8B)) {
			return false;
		}

		return true;
	}


	/**
	 * Reads names of the worksheets from a file, without parsing the whole file to a \PhpOffice\PhpSpreadsheet\Spreadsheet object
	 *
	 * @param 	string 		$pFilename
	 * @throws 	\PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public function listWorksheetNames($pFilename)
	{
		// Check if file exists
		if (!file_exists($pFilename)) {
			throw new \PhpOffice\PhpSpreadsheet\Reader\Exception("Could not open " . $pFilename . " for reading! File does not exist.");
		}

		$xml = new XMLReader();
		$xml->xml(
			$this->securityScanFile('compress.zlib://'.realpath($pFilename)), null, \PhpOffice\PhpSpreadsheet\Settings::getLibXmlLoaderOptions()
		);
		$xml->setParserProperty(2,true);

		$worksheetNames = array();
		while ($xml->read()) {
			if ($xml->name == 'gnm:SheetName' && $xml->nodeType == XMLReader::ELEMENT) {
			    $xml->read();	//	Move onto the value node
				$worksheetNames[] = (string) $xml->value;
			} elseif ($xml->name == 'gnm:Sheets') {
				//	break out of the loop once we've got our sheet names rather than parse the entire file
				break;
			}
		}

		return $worksheetNames;
	}


	/**
	 * Return worksheet info (Name, Last Column Letter, Last Column Index, Total Rows, Total Columns)
	 *
	 * @param   string     $pFilename
	 * @throws   \PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public function listWorksheetInfo($pFilename)
	{
		// Check if file exists
		if (!file_exists($pFilename)) {
			throw new \PhpOffice\PhpSpreadsheet\Reader\Exception("Could not open " . $pFilename . " for reading! File does not exist.");
		}

		$xml = new XMLReader();
		$xml->xml(
			$this->securityScanFile('compress.zlib://'.realpath($pFilename)), null, \PhpOffice\PhpSpreadsheet\Settings::getLibXmlLoaderOptions()
		);
		$xml->setParserProperty(2,true);

		$worksheetInfo = array();
		while ($xml->read()) {
			if ($xml->name == 'gnm:Sheet' && $xml->nodeType == XMLReader::ELEMENT) {
				$tmpInfo = array(
					'worksheetName' => '',
					'lastColumnLetter' => 'A',
					'lastColumnIndex' => 0,
					'totalRows' => 0,
					'totalColumns' => 0,
				);

				while ($xml->read()) {
					if ($xml->name == 'gnm:Name' && $xml->nodeType == XMLReader::ELEMENT) {
					    $xml->read();	//	Move onto the value node
						$tmpInfo['worksheetName'] = (string) $xml->value;
					} elseif ($xml->name == 'gnm:MaxCol' && $xml->nodeType == XMLReader::ELEMENT) {
					    $xml->read();	//	Move onto the value node
						$tmpInfo['lastColumnIndex'] = (int) $xml->value;
						$tmpInfo['totalColumns'] = (int) $xml->value + 1;
					} elseif ($xml->name == 'gnm:MaxRow' && $xml->nodeType == XMLReader::ELEMENT) {
					    $xml->read();	//	Move onto the value node
						$tmpInfo['totalRows'] = (int) $xml->value + 1;
						break;
					}
				}
				$tmpInfo['lastColumnLetter'] = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($tmpInfo['lastColumnIndex']);
				$worksheetInfo[] = $tmpInfo;
			}
		}

		return $worksheetInfo;
	}


	private function _gzfileGetContents($filename) {
		$file = @gzopen($filename, 'rb');
		if ($file !== false) {
			$data = '';
			while (!gzeof($file)) {
				$data .= gzread($file, 1024);
			}
			gzclose($file);
		}
		return $data;
	}


	/**
	 * Loads \PhpOffice\PhpSpreadsheet\Spreadsheet from file
	 *
	 * @param 	string 		$pFilename
	 * @return 	\PhpOffice\PhpSpreadsheet\Spreadsheet
	 * @throws 	\PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public function load($pFilename)
	{
		// Create new \PhpOffice\PhpSpreadsheet\Spreadsheet
		$obj\PhpOffice\PhpSpreadsheet\Spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

		// Load into this instance
		return $this->loadIntoExisting($pFilename, $obj\PhpOffice\PhpSpreadsheet\Spreadsheet);
	}


	/**
	 * Loads \PhpOffice\PhpSpreadsheet\Spreadsheet from file into \PhpOffice\PhpSpreadsheet\Spreadsheet instance
	 *
	 * @param 	string 		$pFilename
	 * @param	\PhpOffice\PhpSpreadsheet\Spreadsheet	$obj\PhpOffice\PhpSpreadsheet\Spreadsheet
	 * @return 	\PhpOffice\PhpSpreadsheet\Spreadsheet
	 * @throws 	\PhpOffice\PhpSpreadsheet\Reader\Exception
	 */
	public function loadIntoExisting($pFilename, \PhpOffice\PhpSpreadsheet\Spreadsheet $obj\PhpOffice\PhpSpreadsheet\Spreadsheet)
	{
		// Check if file exists
		if (!file_exists($pFilename)) {
			throw new \PhpOffice\PhpSpreadsheet\Reader\Exception("Could not open " . $pFilename . " for reading! File does not exist.");
		}

		$timezoneObj = new DateTimeZone('Europe/London');
		$GMT = new DateTimeZone('UTC');

		$gFileData = $this->_gzfileGetContents($pFilename);

//		echo '<pre>';
//		echo htmlentities($gFileData,ENT_QUOTES,'UTF-8');
//		echo '</pre><hr />';
//
		$xml = simplexml_load_string($this->securityScan($gFileData), 'SimpleXMLElement', \PhpOffice\PhpSpreadsheet\Settings::getLibXmlLoaderOptions());
		$namespacesMeta = $xml->getNamespaces(true);

//		var_dump($namespacesMeta);
//
		$gnmXML = $xml->children($namespacesMeta['gnm']);

		$docProps = $obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getProperties();
		//	Document Properties are held differently, depending on the version of Gnumeric
		if (isset($namespacesMeta['office'])) {
			$officeXML = $xml->children($namespacesMeta['office']);
		    $officeDocXML = $officeXML->{'document-meta'};
			$officeDocMetaXML = $officeDocXML->meta;

			foreach($officeDocMetaXML as $officePropertyData) {

				$officePropertyDC = array();
				if (isset($namespacesMeta['dc'])) {
					$officePropertyDC = $officePropertyData->children($namespacesMeta['dc']);
				}
				foreach($officePropertyDC as $propertyName => $propertyValue) {
					$propertyValue = (string) $propertyValue;
					switch ($propertyName) {
						case 'title' :
								$docProps->setTitle(trim($propertyValue));
								break;
						case 'subject' :
								$docProps->setSubject(trim($propertyValue));
								break;
						case 'creator' :
								$docProps->setCreator(trim($propertyValue));
								$docProps->setLastModifiedBy(trim($propertyValue));
								break;
						case 'date' :
								$creationDate = strtotime(trim($propertyValue));
								$docProps->setCreated($creationDate);
								$docProps->setModified($creationDate);
								break;
						case 'description' :
								$docProps->setDescription(trim($propertyValue));
								break;
					}
				}
				$officePropertyMeta = array();
				if (isset($namespacesMeta['meta'])) {
					$officePropertyMeta = $officePropertyData->children($namespacesMeta['meta']);
				}
				foreach($officePropertyMeta as $propertyName => $propertyValue) {
					$attributes = $propertyValue->attributes($namespacesMeta['meta']);
					$propertyValue = (string) $propertyValue;
					switch ($propertyName) {
						case 'keyword' :
								$docProps->setKeywords(trim($propertyValue));
								break;
						case 'initial-creator' :
								$docProps->setCreator(trim($propertyValue));
								$docProps->setLastModifiedBy(trim($propertyValue));
								break;
						case 'creation-date' :
								$creationDate = strtotime(trim($propertyValue));
								$docProps->setCreated($creationDate);
								$docProps->setModified($creationDate);
								break;
						case 'user-defined' :
								list(,$attrName) = explode(':',$attributes['name']);
								switch ($attrName) {
									case 'publisher' :
											$docProps->setCompany(trim($propertyValue));
											break;
									case 'category' :
											$docProps->setCategory(trim($propertyValue));
											break;
									case 'manager' :
											$docProps->setManager(trim($propertyValue));
											break;
								}
								break;
					}
				}
			}
		} elseif (isset($gnmXML->Summary)) {
			foreach($gnmXML->Summary->Item as $summaryItem) {
				$propertyName = $summaryItem->name;
				$propertyValue = $summaryItem->{'val-string'};
				switch ($propertyName) {
					case 'title' :
						$docProps->setTitle(trim($propertyValue));
						break;
					case 'comments' :
						$docProps->setDescription(trim($propertyValue));
						break;
					case 'keywords' :
						$docProps->setKeywords(trim($propertyValue));
						break;
					case 'category' :
						$docProps->setCategory(trim($propertyValue));
						break;
					case 'manager' :
						$docProps->setManager(trim($propertyValue));
						break;
					case 'author' :
						$docProps->setCreator(trim($propertyValue));
						$docProps->setLastModifiedBy(trim($propertyValue));
						break;
					case 'company' :
						$docProps->setCompany(trim($propertyValue));
						break;
				}
			}
		}

		$worksheetID = 0;
		foreach($gnmXML->Sheets->Sheet as $sheet) {
			$worksheetName = (string) $sheet->Name;
//			echo '<b>Worksheet: ',$worksheetName,'</b><br />';
			if ((isset($this->_loadSheetsOnly)) && (!in_array($worksheetName, $this->_loadSheetsOnly))) {
				continue;
			}

			$maxRow = $maxCol = 0;

			// Create new Worksheet
			$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->createSheet();
			$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->setActiveSheetIndex($worksheetID);
			//	Use false for $updateFormulaCellReferences to prevent adjustment of worksheet references in formula
			//		cells... during the load, all formulae should be correct, and we're simply bringing the worksheet
			//		name in line with the formula, not the reverse
			$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->setTitle($worksheetName,false);

			if ((!$this->_readDataOnly) && (isset($sheet->PrintInformation))) {
				if (isset($sheet->PrintInformation->Margins)) {
					foreach($sheet->PrintInformation->Margins->children('gnm',TRUE) as $key => $margin) {
						$marginAttributes = $margin->attributes();
						$marginSize = 72 / 100;	//	Default
						switch($marginAttributes['PrefUnit']) {
							case 'mm' :
								$marginSize = intval($marginAttributes['Points']) / 100;
								break;
						}
						switch($key) {
							case 'top' :
								$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getPageMargins()->setTop($marginSize);
								break;
							case 'bottom' :
								$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getPageMargins()->setBottom($marginSize);
								break;
							case 'left' :
								$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getPageMargins()->setLeft($marginSize);
								break;
							case 'right' :
								$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getPageMargins()->setRight($marginSize);
								break;
							case 'header' :
								$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getPageMargins()->setHeader($marginSize);
								break;
							case 'footer' :
								$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getPageMargins()->setFooter($marginSize);
								break;
						}
					}
				}
			}

			foreach($sheet->Cells->Cell as $cell) {
				$cellAttributes = $cell->attributes();
				$row = (int) $cellAttributes->Row + 1;
				$column = (int) $cellAttributes->Col;

				if ($row > $maxRow) $maxRow = $row;
				if ($column > $maxCol) $maxCol = $column;

				$column = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($column);

				// Read cell?
				if ($this->getReadFilter() !== NULL) {
					if (!$this->getReadFilter()->readCell($column, $row, $worksheetName)) {
						continue;
					}
				}

				$ValueType = $cellAttributes->ValueType;
				$ExprID = (string) $cellAttributes->ExprID;
//				echo 'Cell ',$column,$row,'<br />';
//				echo 'Type is ',$ValueType,'<br />';
//				echo 'Value is ',$cell,'<br />';
				$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_FORMULA;
				if ($ExprID > '') {
					if (((string) $cell) > '') {

						$this->_expressions[$ExprID] = array( 'column'	=> $cellAttributes->Col,
															  'row'		=> $cellAttributes->Row,
															  'formula'	=> (string) $cell
															);
//						echo 'NEW EXPRESSION ',$ExprID,'<br />';
					} else {
						$expression = $this->_expressions[$ExprID];

						$cell = $this->_referenceHelper->updateFormulaReferences( $expression['formula'],
																				  'A1',
																				  $cellAttributes->Col - $expression['column'],
																				  $cellAttributes->Row - $expression['row'],
																				  $worksheetName
																				);
//						echo 'SHARED EXPRESSION ',$ExprID,'<br />';
//						echo 'New Value is ',$cell,'<br />';
					}
					$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_FORMULA;
				} else {
					switch($ValueType) {
						case '10' :		//	NULL
							$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NULL;
							break;
						case '20' :		//	Boolean
							$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_BOOL;
							$cell = ($cell == 'TRUE') ? True : False;
							break;
						case '30' :		//	Integer
							$cell = intval($cell);
						case '40' :		//	Float
							$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC;
							break;
						case '50' :		//	Error
							$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_ERROR;
							break;
						case '60' :		//	String
							$type = \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING;
							break;
						case '70' :		//	Cell Range
						case '80' :		//	Array
					}
				}
				$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getCell($column.$row)->setValueExplicit($cell,$type);
			}

			if ((!$this->_readDataOnly) && (isset($sheet->Objects))) {
				foreach($sheet->Objects->children('gnm',TRUE) as $key => $comment) {
					$commentAttributes = $comment->attributes();
					//	Only comment objects are handled at the moment
					if ($commentAttributes->Text) {
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getComment( (string)$commentAttributes->ObjectBound )
															->setAuthor( (string)$commentAttributes->Author )
															->setText($this->_parseRichText((string)$commentAttributes->Text) );
					}
				}
			}
//			echo '$maxCol=',$maxCol,'; $maxRow=',$maxRow,'<br />';
//
			foreach($sheet->Styles->StyleRegion as $styleRegion) {
				$styleAttributes = $styleRegion->attributes();
				if (($styleAttributes['startRow'] <= $maxRow) &&
					($styleAttributes['startCol'] <= $maxCol)) {

					$startColumn = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex((int) $styleAttributes['startCol']);
					$startRow = $styleAttributes['startRow'] + 1;

					$endColumn = ($styleAttributes['endCol'] > $maxCol) ? $maxCol : (int) $styleAttributes['endCol'];
					$endColumn = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($endColumn);
					$endRow = ($styleAttributes['endRow'] > $maxRow) ? $maxRow : $styleAttributes['endRow'];
					$endRow += 1;
					$cellRange = $startColumn.$startRow.':'.$endColumn.$endRow;
//					echo $cellRange,'<br />';

					$styleAttributes = $styleRegion->Style->attributes();
//					var_dump($styleAttributes);
//					echo '<br />';

					//	We still set the number format mask for date/time values, even if _readDataOnly is true
					if ((!$this->_readDataOnly) ||
						(\PhpOffice\PhpSpreadsheet\Shared\Date::isDateTimeFormatCode((string) $styleAttributes['Format']))) {
						$styleArray = array();
						$styleArray['numberformat']['code'] = (string) $styleAttributes['Format'];
						//	If _readDataOnly is false, we set all formatting information
						if (!$this->_readDataOnly) {
							switch($styleAttributes['HAlign']) {
								case '1' :
									$styleArray['alignment']['horizontal'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_GENERAL;
									break;
								case '2' :
									$styleArray['alignment']['horizontal'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT;
									break;
								case '4' :
									$styleArray['alignment']['horizontal'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT;
									break;
								case '8' :
									$styleArray['alignment']['horizontal'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
									break;
								case '16' :
								case '64' :
									$styleArray['alignment']['horizontal'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER_CONTINUOUS;
									break;
								case '32' :
									$styleArray['alignment']['horizontal'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_JUSTIFY;
									break;
							}

							switch($styleAttributes['VAlign']) {
								case '1' :
									$styleArray['alignment']['vertical'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP;
									break;
								case '2' :
									$styleArray['alignment']['vertical'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_BOTTOM;
									break;
								case '4' :
									$styleArray['alignment']['vertical'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER;
									break;
								case '8' :
									$styleArray['alignment']['vertical'] = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_JUSTIFY;
									break;
							}

							$styleArray['alignment']['wrap'] = ($styleAttributes['WrapText'] == '1') ? True : False;
							$styleArray['alignment']['shrinkToFit'] = ($styleAttributes['ShrinkToFit'] == '1') ? True : False;
							$styleArray['alignment']['indent'] = (intval($styleAttributes["Indent"]) > 0) ? $styleAttributes["indent"] : 0;

							$RGB = self::_parseGnumericColour($styleAttributes["Fore"]);
							$styleArray['font']['color']['rgb'] = $RGB;
							$RGB = self::_parseGnumericColour($styleAttributes["Back"]);
							$shade = $styleAttributes["Shade"];
							if (($RGB != '000000') || ($shade != '0')) {
								$styleArray['fill']['color']['rgb'] = $styleArray['fill']['startcolor']['rgb'] = $RGB;
								$RGB2 = self::_parseGnumericColour($styleAttributes["PatternColor"]);
								$styleArray['fill']['endcolor']['rgb'] = $RGB2;
								switch($shade) {
									case '1' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID;
										break;
									case '2' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR;
										break;
									case '3' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_PATH;
										break;
									case '4' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKDOWN;
										break;
									case '5' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKGRAY;
										break;
									case '6' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKGRID;
										break;
									case '7' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKHORIZONTAL;
										break;
									case '8' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKTRELLIS;
										break;
									case '9' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKUP;
										break;
									case '10' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_DARKVERTICAL;
										break;
									case '11' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_GRAY0625;
										break;
									case '12' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_GRAY125;
										break;
									case '13' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTDOWN;
										break;
									case '14' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTGRAY;
										break;
									case '15' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTGRID;
										break;
									case '16' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTHORIZONTAL;
										break;
									case '17' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTTRELLIS;
										break;
									case '18' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTUP;
										break;
									case '19' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_LIGHTVERTICAL;
										break;
									case '20' :
										$styleArray['fill']['type'] = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_PATTERN_MEDIUMGRAY;
										break;
								}
							}

							$fontAttributes = $styleRegion->Style->Font->attributes();
//							var_dump($fontAttributes);
//							echo '<br />';
							$styleArray['font']['name'] = (string) $styleRegion->Style->Font;
							$styleArray['font']['size'] = intval($fontAttributes['Unit']);
							$styleArray['font']['bold'] = ($fontAttributes['Bold'] == '1') ? True : False;
							$styleArray['font']['italic'] = ($fontAttributes['Italic'] == '1') ? True : False;
							$styleArray['font']['strike'] = ($fontAttributes['StrikeThrough'] == '1') ? True : False;
							switch($fontAttributes['Underline']) {
								case '1' :
									$styleArray['font']['underline'] = \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_SINGLE;
									break;
								case '2' :
									$styleArray['font']['underline'] = \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLE;
									break;
								case '3' :
									$styleArray['font']['underline'] = \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_SINGLEACCOUNTING;
									break;
								case '4' :
									$styleArray['font']['underline'] = \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_DOUBLEACCOUNTING;
									break;
								default :
									$styleArray['font']['underline'] = \PhpOffice\PhpSpreadsheet\Style\Font::UNDERLINE_NONE;
									break;
							}
							switch($fontAttributes['Script']) {
								case '1' :
									$styleArray['font']['superScript'] = True;
									break;
								case '-1' :
									$styleArray['font']['subScript'] = True;
									break;
							}

							if (isset($styleRegion->Style->StyleBorder)) {
								if (isset($styleRegion->Style->StyleBorder->Top)) {
									$styleArray['borders']['top'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->Top->attributes());
								}
								if (isset($styleRegion->Style->StyleBorder->Bottom)) {
									$styleArray['borders']['bottom'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->Bottom->attributes());
								}
								if (isset($styleRegion->Style->StyleBorder->Left)) {
									$styleArray['borders']['left'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->Left->attributes());
								}
								if (isset($styleRegion->Style->StyleBorder->Right)) {
									$styleArray['borders']['right'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->Right->attributes());
								}
								if ((isset($styleRegion->Style->StyleBorder->Diagonal)) && (isset($styleRegion->Style->StyleBorder->{'Rev-Diagonal'}))) {
									$styleArray['borders']['diagonal'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->Diagonal->attributes());
									$styleArray['borders']['diagonaldirection'] = \PhpOffice\PhpSpreadsheet\Style\Borders::DIAGONAL_BOTH;
								} elseif (isset($styleRegion->Style->StyleBorder->Diagonal)) {
									$styleArray['borders']['diagonal'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->Diagonal->attributes());
									$styleArray['borders']['diagonaldirection'] = \PhpOffice\PhpSpreadsheet\Style\Borders::DIAGONAL_UP;
								} elseif (isset($styleRegion->Style->StyleBorder->{'Rev-Diagonal'})) {
									$styleArray['borders']['diagonal'] = self::_parseBorderAttributes($styleRegion->Style->StyleBorder->{'Rev-Diagonal'}->attributes());
									$styleArray['borders']['diagonaldirection'] = \PhpOffice\PhpSpreadsheet\Style\Borders::DIAGONAL_DOWN;
								}
							}
							if (isset($styleRegion->Style->HyperLink)) {
								//	TO DO
								$hyperlink = $styleRegion->Style->HyperLink->attributes();
							}
						}
//						var_dump($styleArray);
//						echo '<br />';
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getStyle($cellRange)->applyFromArray($styleArray);
					}
				}
			}

			if ((!$this->_readDataOnly) && (isset($sheet->Cols))) {
				//	Column Widths
				$columnAttributes = $sheet->Cols->attributes();
				$defaultWidth = $columnAttributes['DefaultSizePts']  / 5.4;
				$c = 0;
				foreach($sheet->Cols->ColInfo as $columnOverride) {
					$columnAttributes = $columnOverride->attributes();
					$column = $columnAttributes['No'];
					$columnWidth = $columnAttributes['Unit']  / 5.4;
					$hidden = ((isset($columnAttributes['Hidden'])) && ($columnAttributes['Hidden'] == '1')) ? true : false;
					$columnCount = (isset($columnAttributes['Count'])) ? $columnAttributes['Count'] : 1;
					while ($c < $column) {
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getColumnDimension(\PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($c))->setWidth($defaultWidth);
						++$c;
					}
					while (($c < ($column+$columnCount)) && ($c <= $maxCol)) {
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getColumnDimension(\PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($c))->setWidth($columnWidth);
						if ($hidden) {
							$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getColumnDimension(\PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($c))->setVisible(false);
						}
						++$c;
					}
				}
				while ($c <= $maxCol) {
					$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getColumnDimension(\PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($c))->setWidth($defaultWidth);
					++$c;
				}
			}

			if ((!$this->_readDataOnly) && (isset($sheet->Rows))) {
				//	Row Heights
				$rowAttributes = $sheet->Rows->attributes();
				$defaultHeight = $rowAttributes['DefaultSizePts'];
				$r = 0;

				foreach($sheet->Rows->RowInfo as $rowOverride) {
					$rowAttributes = $rowOverride->attributes();
					$row = $rowAttributes['No'];
					$rowHeight = $rowAttributes['Unit'];
					$hidden = ((isset($rowAttributes['Hidden'])) && ($rowAttributes['Hidden'] == '1')) ? true : false;
					$rowCount = (isset($rowAttributes['Count'])) ? $rowAttributes['Count'] : 1;
					while ($r < $row) {
						++$r;
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getRowDimension($r)->setRowHeight($defaultHeight);
					}
					while (($r < ($row+$rowCount)) && ($r < $maxRow)) {
						++$r;
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getRowDimension($r)->setRowHeight($rowHeight);
						if ($hidden) {
							$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getRowDimension($r)->setVisible(false);
						}
					}
				}
				while ($r < $maxRow) {
					++$r;
					$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->getRowDimension($r)->setRowHeight($defaultHeight);
				}
			}

			//	Handle Merged Cells in this worksheet
			if (isset($sheet->MergedRegions)) {
				foreach($sheet->MergedRegions->Merge as $mergeCells) {
					if (strpos($mergeCells,':') !== FALSE) {
						$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getActiveSheet()->mergeCells($mergeCells);
					}
				}
			}

			$worksheetID++;
		}

		//	Loop through definedNames (global named ranges)
		if (isset($gnmXML->Names)) {
			foreach($gnmXML->Names->Name as $namedRange) {
				$name = (string) $namedRange->name;
				$range = (string) $namedRange->value;
				if (stripos($range, '#REF!') !== false) {
					continue;
				}

				$range = explode('!',$range);
				$range[0] = trim($range[0],"'");;
				if ($worksheet = $obj\PhpOffice\PhpSpreadsheet\Spreadsheet->getSheetByName($range[0])) {
					$extractedRange = str_replace('$', '', $range[1]);
					$obj\PhpOffice\PhpSpreadsheet\Spreadsheet->addNamedRange( new \PhpOffice\PhpSpreadsheet\NamedRange($name, $worksheet, $extractedRange) );
				}
			}
		}


		// Return
		return $obj\PhpOffice\PhpSpreadsheet\Spreadsheet;
	}


	private static function _parseBorderAttributes($borderAttributes)
	{
		$styleArray = array();

		if (isset($borderAttributes["Color"])) {
			$RGB = self::_parseGnumericColour($borderAttributes["Color"]);
			$styleArray['color']['rgb'] = $RGB;
		}

		switch ($borderAttributes["Style"]) {
			case '0' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_NONE;
				break;
			case '1' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
				break;
			case '2' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM;
				break;
			case '4' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHED;
				break;
			case '5' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK;
				break;
			case '6' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOUBLE;
				break;
			case '7' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOTTED;
				break;
			case '9' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOT;
				break;
			case '10' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUMDASHDOT;
				break;
			case '11' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DASHDOTDOT;
				break;
			case '12' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUMDASHDOTDOT;
				break;
			case '13' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUMDASHDOTDOT;
				break;
			case '3' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_SLANTDASHDOT;
				break;
			case '8' :
				$styleArray['style'] = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUMDASHED;
				break;
		}
		return $styleArray;
	}


	private function _parseRichText($is = '') {
		$value = new \PhpOffice\PhpSpreadsheet\RichText\RichText();

		$value->createText($is);

		return $value;
	}


	private static function _parseGnumericColour($gnmColour) {
		list($gnmR,$gnmG,$gnmB) = explode(':',$gnmColour);
		$gnmR = substr(str_pad($gnmR,4,'0',STR_PAD_RIGHT),0,2);
		$gnmG = substr(str_pad($gnmG,4,'0',STR_PAD_RIGHT),0,2);
		$gnmB = substr(str_pad($gnmB,4,'0',STR_PAD_RIGHT),0,2);
		$RGB = $gnmR.$gnmG.$gnmB;
//		echo 'Excel Colour: ',$RGB,'<br />';
		return $RGB;
	}

}
