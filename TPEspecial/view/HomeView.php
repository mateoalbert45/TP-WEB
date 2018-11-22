<?php

require_once ('libs/Smarty.class.php');

class HomeView
{
  function __construct()
{
  $this->Smarty = new Smarty();
}

  function Mostrar(){
    $this->Smarty->display('templates/home.tpl');
   }
}
 ?>
