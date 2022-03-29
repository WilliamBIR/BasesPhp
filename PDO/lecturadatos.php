<?php
    require_once "./DAO.php";
    $dao=new DAO();
    //Parametros con signo de interrogacion
    
    /*$nombreBuscar="Arte";
    $consulta="SELECT codigo,nombre,creditos "
            . "FROM cursos WHERE nombre = ? AND creditos>= ? ORDER BY nombre ASC";
    $parametros=array($nombreBuscar,5);
    */
    
    //De forma asociativa: Parametros de sustitucion nombrables
    $consulta="SELECT codigo,nombre,creditos "
            . "FROM cursos WHERE nombre = :nom AND creditos>= :cre ORDER BY nombre ASC";
    $parametros=array("nom"=>"Procesamiento 1", "cre"=>5);
    
    try{
        $datos=$dao->ejecutarConsulta($consulta,$parametros);
        if(is_integer($datos)){
            echo "Ocurrio un error <br/>";
        }
        if(isset($datos) && !empty($datos)&& sizeof($datos)>0){
            foreach($datos as $curso){
                echo $curso["codigo"]." - ". $curso["nombre"]. " - ". $curso["creditos"]. "<br/>";
            }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>