<?php

class Ganre extends Controller
{
    public function getAllGanre($params = false)
    {
        $model = new GanreModel();
        return $model->getAllGanres();
    }
    
    public function getItemGanre($params = false)
    {
        
    }
    
    public function postGanre($params)
    {
        if(count($params) != 1){
            return ['status'=>400, 'clientCode'=>'0001'];
        }
        $model = new GanreModel();
        $isGanre = $model->isGanreExists($params);
        if($isGanre)
            return $model->createGanre($params);
        else 
            return ['status'=>200, 'err'=>true, 'data'=>'this genre already exists'];
    }
    

    public function putGanre($params)
    {

    }
}

