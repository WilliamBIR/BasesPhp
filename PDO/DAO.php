<?php
require_once './parametros.php';
class DAO {
    PRIVATE $cadenaConexion;
    PRIVATE $conexion;
    
    public function __construct(){
        try{
            $this->cadenaConexion="mysql:host=".BD_Servidor.";port="
                    .BD_Puerto.";dbname=".BD_Nombre.";charset=".BD_Charset;
            $this->conexion= new PDO($this->cadenaConexion,BD_Usuario,BD_Pass);
            //echo "Conexion exitosa";
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function ejecutarConsulta($sql="",$valores=array()){
     if($sql!="" && strlen($sql)>0){
         try{
            $consulta=$this->conexion->prepare($sql);
            $consulta->execute($valores);
            if(intval($consulta->errorCode())===0){
                return $consulta->fetchAll(PDO::FETCH_ASSOC);
            }
            else{
                //return $consulta->errorInfo();
                 return intval($consulta->errorCode());
         }  
         } catch (Exception $ex) {
             return $ex->getMessage();
         }
         
         

         
      }  
     else{
         return 0;
     }
    }
    
    public function ejecutarOrden($sql="", $valores=array()){
        if($sql!="" && strlen($sql)>0){
        try{
            $this->conexion->beginTransaction();
            $consulta=$this->conexion->prepare($sql);
            $consulta->execute($valores);
            
            if(intval($consulta->errorCode())===0){
                $this->conexion->commit();
                $filasAfectadas=$consulta->rowCount();
                return $filasAfectadas;
            }
            else{
                $this->conexion->rollBack();
                return -1;
            }  
        } catch (Exception $ex) {
            $this->conexion->rollBack();
            return $ex->getMessage();
        }
      }  
     else{
         return 0;
     }
    }
}

//$dao= new DAO();
