<?php

require_once ('libs/Smarty.class.php');

class TabladeTallesView
{
  function __construct()
{
  $this->Smarty = new Smarty();
}


    function MostrarTablaTalles(){
      $this->Smarty->display('templates/tabladetalles.tpl');
     }

}
 ?>
