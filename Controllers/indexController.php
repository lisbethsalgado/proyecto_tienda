<?php
class indexController extends Controller
{
    private $_login;
 public function __construct()
 {
 parent::__construct();
// $this->_login=$this->loadModel('login');
 }

public function index()
    {
    
         $this->_view->titulo = 'Tienda';
         $this->_view->renderizar('index');

 }

     public function cerrar()
     {
        
    Session::destroy();
        $this->renderizar('index');
     }
 



}//fin de la clase indexController
?>
 
 