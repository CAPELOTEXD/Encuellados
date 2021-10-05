<?php
 
 class registrar_productos{

        public function Agregar($a,$b,$c,$d,$e){

                Mysqli_query($this->db,"INSERT INTO Catalogo (CATEGORIA,DESCRIPCION,TALLA,GENERO,VALOR) VALUES($a,'$b',$c,$d,$e)");              

               echo"<script type='text/javascript'>
                 alert('Datos ingresados correctamente');
                 window.location.href='../Index.php';
                 </script>";
              }           
   
 }

?>