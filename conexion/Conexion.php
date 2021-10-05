<?php 

  class Conexion {
    public function Conexion(){

      return $conectar =  mysqli_connect("localhost:3306", "root", "", "encuellados");
      
    }    
  }
?>