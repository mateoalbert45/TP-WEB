<?php

require_once ('libs/Smarty.class.php');

class ContactosView
{
  function __construct()
{
  $this->Smarty = new Smarty();
}



     function MostrarContactos(){
       $this->Smarty->display('templates/contactos.tpl');
      }

}
 ?>
