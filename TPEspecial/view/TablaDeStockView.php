<?php

require_once ('libs/Smarty.class.php');

class TablaDeStockView
{
  function __construct()
{
  $this->Smarty = new Smarty();
}



      function MostrarTablaDeStock(){
        $smarty = new Smarty();
        $this->Smarty->display('templates/tabladestock.tpl');
       }
}
 ?>
