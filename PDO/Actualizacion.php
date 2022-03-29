<?php
    require_once './DAO.php';
     $dao= new DAO();
     
     $query="UPDATE cursos SET nombre= :nom WHERE codigo= :cod";
     $parametros=array("nom"=>"Artes Plasticas", "cod"=>123455);
     try{
         $resultado=$dao->ejecutarOrden($query,$parametros);
         echo "Resultado: " . $resultado . "<br/>";
         if ($resultado===0){
            echo "ninguna actualizacion realizada <br/>";

         }
         elseif($resultado>0){
            echo "operacion exitosa" . "<br/>";
         }
         else{
             echo "ocurrio un error" . "<br/>";
         }
     } catch (Exception $ex) {
         echo $ex->getMessage() . "<br/>";
     }

?>
