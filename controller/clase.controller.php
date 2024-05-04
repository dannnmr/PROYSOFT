<?php
require_once 'model/clase.php';

class claseController
{
    private $model;
    public function __construct()
    {
        $this->model=new clase();
    }
    
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/clase/clase.php';
        require_once 'view/footer.php';
    }
    
    public function Crud()
    {
        $prod = new clase();
        
        if (isset($_REQUEST['id']))
        {
            $prod = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/clase/clase.php';
        require_once 'view/footer.php';
    }
    
    public function Nuevo()
    {
        $prod = new clase();
        require_once 'view/header.php';
        require_once 'view/clase/clase.php';
        require_once 'view/footer.php';
    }
    public function Guardar()
    { //NUEVO
        $prod = new clase();
        $prod->id = $_REQUEST['id'];  
        $prod->cantidad = $_REQUEST['cantidad'];
        $prod->fecharegistro = $_REQUEST['fecharegistro'];
        $prod->nivel = $_REQUEST['nivel'];
        $prod->estado = $_REQUEST['estado'];
        $prod->idtipoclase = $_REQUEST['idtipoclase'];
        $prod->iddocente = $_REQUEST['iddocente'];
        $prod->idusuario = $_REQUEST['idusuario'];
        $this->model->Registrar($prod);
        header('Location: index.php?c=clase');
    }
    public function Editar()
    {
        $prod = new clase();
        $prod->id = $_REQUEST['id'];  
        $prod->cantidad = $_REQUEST['cantidad'];
        $prod->fecharegistro = $_REQUEST['fecharegistro'];
        $prod->nivel = $_REQUEST['nivel'];
        $prod->estado = $_REQUEST['estado'];
        $prod->idtipoclase = $_REQUEST['idtipoclase'];
        $prod->iddocente = $_REQUEST['iddocente'];
        $prod->idusuario = $_REQUEST['idusuario'];
        $this->model->Actualizar($prod);
        header('Location: index.php?c=clase');
    }
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=clase');
    }
}