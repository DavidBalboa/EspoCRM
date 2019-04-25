<?php

namespace Espo\Custom\Controllers;
use Espo\Custom\Entities;

class Reclamo extends \Espo\Core\Templates\Controllers\BasePlus
{
    public function getActionRut($params, $data, $request)
    {
        $json = "{";
        $total = 0;
        // $GLOBALS['log']->debug("prueba de params " . gettype($params),[]);
        // $params_string = print_r($params, true);
        // $GLOBALS['log']->debug("prueba de params string: $params_string", []);
        $paramRut = $params["id"];
        //$paramRut = "5cc0cd9124864ec87";
        
        $rutReclamo = "";
        $nombreReclamo = "";
        
        $entityManager = $this->getEntityManager();
        /*
         $reclamo = $entityManager->getRepository('Reclamo')->get("5cc1a163529d93a7c");
         $nombreReclamo = $reclamo->get('reclamoObservacion');
        */
        /*
        $reclamo = $entityManager->getRepository('Reclamo')
        ->where([
            'beneficiario' => $paramRut
        ])
        ->find();
        
        foreach ($reclamo as $entity) {
            $nombreReclamo .= $entity->get('reclamoObservacion') . " == " . $entity->get('reclamoTitulo') . ", ";
        }*/
        
        $childList = $entityManager->getRepository('Reclamo')->distinct()->join('Beneficiario')->where([
            'beneficiario.beneficiario_id' => $paramRut
        ])->find();
        
        $list = "";
        $comma = "";
        foreach ($childList as $entity) {
            $tmp = "";
            
            $reclamoId = $entity->get('reclamoId');
            $reclamoObservacion = $entity->get('reclamoObservacion');
            $reclamoTitulo = $entity->get('reclamoTitulo');
            $motivoReclamoName = $entity->get('motivoReclamoName');
            $beneficiarioName = $entity->get('beneficiarioName');
            $beneficiario = $this->getEntityManager()->getRepository('Beneficiario')->where(['beneficiario.beneficiario_id' => $paramRut])->findOne();
            $beneficiarioId = $beneficiario->get('beneficiarioId');
            $motivoReclamo = $this->getEntityManager()->getRepository('MotivoReclamo')->get($entity->get('motivoReclamoId')); 
            $motivoReclamoId = $motivoReclamo->get('motivoReclamoId');
            //$entity->get('reclamoObservacion') . " == " . $entity->get('reclamoTitulo') . ", ";
            //$request_string = print_r(get_object_vars($entity), true);
            /*$GLOBALS['log']->debug("Es un objeto entity, prueba de request " . $entity,[]);
            $GLOBALS['log']->debug("\n",[]);
            $GLOBALS['log']->debug("Es un objeto entity, request " . $request_string,[]);
            $GLOBALS['log']->debug("\n",[]);
            $GLOBALS['log']->debug("Es un objeto entity, prueba de request json_encode " . json_encode($entity),[]);
            $GLOBALS['log']->debug("\n",[]);
            $GLOBALS['log']->debug("Es un objeto entity, prueba de request plano " . ($entity->data),[]);*/
            //$GLOBALS['log']->debug("tmp: " . ($tmp),[]);
            //$tmp .= 
            //$list .= "{" . . "}";
            $tmp = $comma . "{\"reclamoId\": \"$reclamoId\", \"reclamoObservacion\": \"$reclamoObservacion\", \"reclamoTitulo\": \"$reclamoTitulo\", \"motivoReclamoName\": \"$motivoReclamoName\", \"beneficiarioName\": \"$beneficiarioName\", \"beneficiarioId\": \"$beneficiarioId\", \"motivoReclamoId\":\"$motivoReclamoId\"}";
            $list .= $tmp;
            $total++;
            if ($total > 0) { $comma = ","; }
        }
        //$list = $tmp;
        /*$GLOBALS['log']->debug("tipo de request " . gettype($childList),[]);
        if (is_object($childList)){
            $request_string = print_r(get_object_vars($childList), true);
            $GLOBALS['log']->debug("Es un objeto, prueba de request " . $request_string,[]);
            $GLOBALS['log']->debug("Es un objeto, prueba de request json_encode " . json_encode($request_string),[]);
            $GLOBALS['log']->debug("Es un objeto, prueba de request json_encode " . json_encode($childList),[]);
            $GLOBALS['log']->debug("Es un objeto, prueba de request plano " . ($childList->toArray()),[]);
        }
        $resp = print_r(get_object_vars($childList), true);
        $GLOBALS['log']->debug("reclamos: " . json_encode(($childList)), []);*/
        return "{\"total\": " . $total . ", \"list\": [" . $list . "]}";//;"{\"key\": 1, \"value\": \"146340253\", \"rut\": \"" . $rutReclamo . "\", \"nombre\": \"" . $tmp . "\" , \"tmp\": \"" . $tmp . "\"}";
    }
    
}
