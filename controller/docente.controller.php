<?php
require_once 'model/docente.php';

class docenteController
{
    private $model;
    public function __construct()
    {
        $this->model=new docente();
    }
    
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/docente/docente.php';
        require_once 'view/footer.php';
    }
    
    public function Crud()
    {
        $prod = new docente();
        
        if (isset($_REQUEST['id']))
        {
            $prod = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/docente/docente.php';
        require_once 'view/footer.php';
    }
    
    public function Nuevo()
    {
        $prod = new docente();
        require_once 'view/header.php';
        require_once 'view/docente/docente.php';
        require_once 'view/footer.php';
    }
    public function Guardar()
    { //NUEVO
        $prod = new docente();
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->fechanacimiento = $_REQUEST['fechanacimiento'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->direccion = $_REQUEST['direccion'];
        $prod->genero = $_REQUEST['genero'];
        $prod->especialidad = $_REQUEST['especialidad'];
        $prod->estado = $_REQUEST['estado'];
        $this->model->Registrar($prod);
        header('Location: index.php?c=docente');
    }
    public function Editar()
    {
        $prod = new docente();
        $prod->id = $_REQUEST['id'];
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->fechanacimiento = $_REQUEST['fechanacimiento'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->direccion = $_REQUEST['direccion'];
        $prod->genero = $_REQUEST['genero'];
        $prod->especialidad = $_REQUEST['especialidad'];
        $prod->estado = $_REQUEST['estado'];
        $this->model->Actualizar($prod);
        header('Location: index.php?c=docente');
    }
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=docente');
    }
}