<?php
    require_once './DAO.php';
     $dao= new DAO();
     $query="INSERT INTO cursos (codigo, nombre, creditos) VALUES ".
             "(744253,'Ingenieria de software',5)";
     
     try{
         $resultado=$dao->ejecutarOrden($query);
         echo "Resultado: " . $resultado . "<br/>";
         if ($resultado>=0){
            echo "operacion exitosa" . "<br/>";
         }
         else{
             echo "ocurrio un error" . "<br/>";
         }
     } catch (Exception $ex) {
         echo $ex->getMessage() . "<br/>";
     }

?>

