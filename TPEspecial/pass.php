<?php
$hash = password_hash("hola", PASSWORD_DEFAULT);





echo $hash;

if (password_verify("hola", $hash))
     echo "Credenciales válidas";
else
   echo "Credenciales invalidas";

 ?>
