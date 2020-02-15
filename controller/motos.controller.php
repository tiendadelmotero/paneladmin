<?php
require_once 'model/motos.php';

class motosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new motos();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/motos/motos.php';
       
    }
    
    public function Crud(){
        $motos = new motos();
        
        if(isset($_REQUEST['id'])){
            $motos = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/motos/motos-editar.php';
        
    }
    
    public function Guardar(){
        $motos = new motos();
        
        $motos->marca = $_REQUEST['marca'];
        $motos->referencia = $_REQUEST['referencia'];
        $motos->modelo = $_REQUEST['modelo'];  
        $motos->soat_a = $_REQUEST['soat_a'];    
        $motos->soat_b = $_REQUEST['soat_b'];    
        $motos->soat_c = $_REQUEST['soat_c'];    
        $motos->soat_d = $_REQUEST['soat_d'];    
      

        $motos->id > 0 
            ? $this->model->Actualizar($motos)
            : $this->model->Registrar($motos);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}