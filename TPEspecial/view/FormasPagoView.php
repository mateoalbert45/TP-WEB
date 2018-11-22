<?php

require_once ('libs/Smarty.class.php');

class FormasPagoView
{
  function __construct()
{
  $this->Smarty = new Smarty();
}

   function MostrarFormas(){
     $this->Smarty->display('templates/formaspago.tpl');
    }

}
 ?>
