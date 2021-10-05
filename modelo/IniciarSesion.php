<?php 
 class IniciarSession{

     

    public function Iniciar($usuario, $Pass){
     $user = "Tavo@gmail.com";
     $password = "123456";
        
        if($usuario == $user && $Pass == $password){
            echo"<script type='text/javascript'>
                 alert('Datos ingresados correctamente');
                 window.location.href='../VistaAdmin.php';
                 </script>";

        }
        else{
            echo"<script type='text/javascript'>
                 alert('Datos Incorrectos');
                 window.location.href='../LoginAdmin.php';
                 </script>";
        }

    }
}
