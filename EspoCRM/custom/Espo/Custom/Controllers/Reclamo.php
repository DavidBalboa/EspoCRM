<?php

namespace Espo\Custom\Controllers;

use \Espo\Core\Exceptions\BadRequest;

class Reclamo extends \Espo\Core\Templates\Controllers\BasePlus
{
    public function getActionRut($params, $data, $request)
    {
        $total = 0;
        // $GLOBALS['log']->debug("prueba de params " . gettype($params),[]);
        // $params_string = print_r($params, true);
        $GLOBALS['log']->debug("prueba de params string: $data", []);
        $paramRut = $params["id"];
        //$paramRut = "5cc0cd9124864ec87";
        
        
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
    
    public function postActionInsert($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        //$GLOBALS['log']->debug("prueba de post " . $params,[]);
        //$d = print_r($data, true);
        //$GLOBALS['log']->debug("prueba de post data: " . $params->beneficiarioId . $d, []);
        
        //$p = print_r($params, true);
        //$GLOBALS['log']->debug("prueba de params " . gettype($params),[]);
        //$GLOBALS['log']->debug("data" . $data,[]);
        //$data = json_encode($data);
        
        //$GLOBALS['log']->debug("prueba de data " . gettype($data),[]);
        //$GLOBALS['log']->debug("data" . $data,[]);
        //$GLOBALS['log']->debug("data" . $data->beneficiarioId,[]);
        //$data = json_encode($data);
        
        /*
        $benef = $request->get('beneficiarioId');
        $GLOBALS['log']->debug("beneficiario: " . $benef,[]);
        $beneficiario = $this->getEntityManager()->getRepository('Beneficiario')->get($benef);
        $GLOBALS['log']->debug("beneficiario: " . $benef . "::" . $beneficiario->get('beneficiarioId'),[]);
        */
        
        
        //  $request->get('beneficiarioId')
        //  Se recupera el id del beneficiario en base al rut informado
        $beneficiario = $this->getEntityManager()->getRepository('Beneficiario')->where([
            'beneficiario.beneficiario_id' => $data->beneficiarioId
        ])->findOne();
        if ($beneficiario == null){
            return "{\"errorCode\": \"00001\", \"errorDescription\": \"El beneficiario no existe\"}";
        }
        $beneficiarioId = $beneficiario->get('id');
        $GLOBALS['log']->debug("beneficiario: " . $beneficiarioId,[]);
        
        try
        {
            //$request->get('empresaId')
            $empresa = $this->getEntityManager()->getRepository('Empresa')->where([
                'empresa.empresa_id' => $data->empresaId
            ])->findOne();
            if ($empresa == null){
                return "{\"errorCode\": \"00001\", \"errorDescription\": \"La empresa no es valida\"}";
            }
            $empresaId = $empresa->get('id');
            $GLOBALS['log']->debug("empresa: " . $empresaId,[]);
        }
        catch (\Exception $exEmpresa){
            $GLOBALS['log']->debug("empresa error: " . $exEmpresa->getMessage(),[]);
            return "{\"error\": \"1\", \"errorDescription\": \"La empresa no es valida\"}";
        }
        $motivoReclamo = $this->getEntityManager()->getRepository('MotivoReclamo')->where([
            'motivo_reclamo.motivo_reclamo_id' => $data->motivoReclamoId
        ])->findOne();
        if ($motivoReclamo == null){
            //throw new BadRequest();
            return "{\"errorCode\": \"00001\", \"errorDescription\": \"El motivo de reclamo no existe\"}";
        }
        $motivoReclamoId = $motivoReclamo->get('id');
        $GLOBALS['log']->debug("motivoReclamo: " . $motivoReclamoId,[]);
        /*
        $result = $this->getContainer()->get('dataManager')->rebuild();
        
        return $result;*/
        //$contact->set('accountId', $entity->id);
        //$reclamo = $this->getEntityManager()->saveEntity($contact);
        //$entity = $this->getEntityManager()->getEntity('ExternalAccount', $params['id']);
        $reclamo = $this->getEntityManager()->getEntity('Reclamo');
        $reclamo->set($data);
        $reclamo->set('beneficiarioId', $beneficiarioId);
        $reclamo->set('empresaId', $empresaId);
        $reclamo->set('motivoReclamoId', $motivoReclamoId);
        $reclamo->set('reclamoTitulo', $request->get('reclamoTitulo'));
        $reclamo->set('reclamoObservacion', $request->get('reclamoObservacion'));
        
        $this->getEntityManager()->saveEntity($reclamo);
        
        return $reclamo->toArray();
        //return "{\"id\":\"5cc32f3a59517e627\",\"deleted\":false,\"createdAt\":\"2019-04-26 16:18:02\",\"modifiedAt\":\"2019-04-26 16:18:02\",\"reclamoId\":\"00013\",\"reclamoTitulo\":\"ccccc\",\"reclamoObservacion\":\"cccccc\",\"createdById\":\"5cb7af37939a97b4e\",\"assignedUserId\":\"5cb7af37939a97b4e\",\"assignedUserName\":\"Omar Neyra\",\"teamsIds\":[],\"teamsNames\":{},\"motivoReclamoId\":\"5cc0f41d8d7711f60\",\"motivoReclamoName\":\"Error en el sistema\",\"beneficiarioId\":\"5cc212fd663d01f5e\",\"beneficiarioName\":\"Omar\",\"empresaId\":\"5cc0d6b84634627cc\",\"empresaName\":\"BHP\"}";
    }
    
}
