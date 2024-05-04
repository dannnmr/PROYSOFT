<?php
require_once 'model/tutor.php';

class tutorController
{
    private $model;
    public function __construct()
    {
        $this->model=new tutor();
    }
    
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/tutor/tutor.php';
        require_once 'view/footer.php';
    }
    
    public function Crud()
    {
        $prod = new tutor();
        
        if (isset($_REQUEST['id']))
        {
            $prod = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/tutor/tutor.php';
        require_once 'view/footer.php';
    }
    
    public function Nuevo()
    {
        $prod = new tutor();
        require_once 'view/header.php';
        require_once 'view/tutor/tutor.php';
        require_once 'view/footer.php';
    }
    public function Guardar()
    { //NUEVO
        $prod = new tutor();
        $prod->id = $_REQUEST['id'];  
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->parentesco = $_REQUEST['parentesco'];
        $prod->estado = $_REQUEST['estado'];
        $this->model->Registrar($prod);
        header('Location: index.php?c=tutor');
    }
    public function Editar()
    {
        $prod = new tutor();
        $prod->id = $_REQUEST['id'];  
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->parentesco = $_REQUEST['parentesco'];
        $prod->estado = $_REQUEST['estado'];

        
        $this->model->Actualizar($prod);
        header('Location: index.php?c=tutor');
    }
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=tutor');
    }
}