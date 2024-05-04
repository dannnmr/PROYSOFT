<?php
require_once 'model/usuario.php';

class usuarioController
{
    private $model;
    public function __construct()
    {
        $this->model=new usuario();
    }
    
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
    
    public function Crud()
    {
        $prod = new usuario();
        
        if (isset($_REQUEST['id']))
        {
            $prod = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
    
    public function Nuevo()
    {
        $prod = new usuario();
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
    public function Guardar()
    { //NUEVO
        $prod = new usuario();
        $prod->id = $_REQUEST['id'];  
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->pass = $_REQUEST['pass'];
        $prod->username = $_REQUEST['username'];
        $prod->idtipousuario = $_REQUEST['id'];
        $prod->idpermiso= $_REQUEST['id'];
        // $prod->Estado = $_REQUEST['Estado'];
        
        $this->model->Registrar($prod);
        header('Location: index.php?c=usuario');
    }
    public function Editar()
    {
        $prod = new usuario();
        $prod->id = $_REQUEST['id'];  
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->pass = $_REQUEST['pass'];
        $prod->username = $_REQUEST['username'];
        $prod->idtipousuario = $_REQUEST['id'];
        $prod->idpermiso= $_REQUEST['id'];
        
        $this->model->Actualizar($prod);
        header('Location: index.php?c=usuario');
    }
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=usuario');
    }
}