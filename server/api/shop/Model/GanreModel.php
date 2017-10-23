<?php

class GanreModel extends Model
{

    public function getAllGanres()
    {
        try{
            $sth = $this->pdo->query("SELECT id, name FROM ganre"); 
            $collection = $this->getFetchAccoss($sth);
            return ['status'=>200, 'data'=>$collection];
        }catch(PDOException $err){
            file_put_contents('errors.txt', $err->getMessage(), FILE_APPEND); 
            return ['status'=>500, 'clientCode'=>'0006'];
        }
    }

    public function createGanre($params){
        try{
            $sth = $this->pdo->prepare("INSERT into ganre (name) VALUES (:name)"); 
            $sth->execute($params);
            if($this->pdo->lastInsertId()>0)
                return ['status'=>200, 'data'=>1];
            else 
            return ['status'=>500, 'clientCode'=>'0006'];
        }catch(PDOException $err){
            file_put_contents('errors.txt', $err->getMessage(), FILE_APPEND); 
            return ['status'=>500, 'clientCode'=>'0006'];
        }
    }
    
    public function isGanreExists($params){
        try{
            $sth = $this->pdo->prepare("SELECT COUNT(*) FROM ganre WHERE name = :name"); 
            $sth->execute($params);
            $res = $sth->fetch(\PDO::FETCH_NUM);
            if($res[0]>0) return false;
            return true;
        }catch(PDOException $err){
            file_put_contents('errors.txt', $err->getMessage(), FILE_APPEND); 
            return ['status'=>500, 'clientCode'=>'0006'];
        }
    }


}
