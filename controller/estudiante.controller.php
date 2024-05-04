<?php
require_once 'model/estudiante.php';

class estudianteController
{
    private $model;
    public function __construct()
    {
        $this->model=new estudiante();
    }
    
    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }
    
    public function Crud()
    {
        $prod = new estudiante();
        
        if (isset($_REQUEST['id']))
        {
            $prod = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }
    
    public function Nuevo()
    {
        $prod = new estudiante();
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }
    public function Guardar()
    { //NUEVO
        $prod = new estudiante();
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->fechanacimiento = $_REQUEST['fechanacimiento'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->direccion = $_REQUEST['direccion'];
        $prod->genero = $_REQUEST['genero'];
        $prod->ocupacion = $_REQUEST['ocupacion'];
        $prod->estado = $_REQUEST['estado'];
        $prod->idTutor = $_REQUEST['idTutor'];
        $this->model->Registrar($prod);
        header('Location: index.php?c=estudiante');
    }
    public function Editar()
    {
        $prod = new estudiante();
        $prod->id = $_REQUEST['id'];  
        $prod->ci = $_REQUEST['ci'];
        $prod->telefono = $_REQUEST['telefono'];
        $prod->fechanacimiento = $_REQUEST['fechanacimiento'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->apellidoP = $_REQUEST['apellidoP'];
        $prod->apellidoM = $_REQUEST['apellidoM'];
        $prod->direccion = $_REQUEST['direccion'];
        $prod->genero = $_REQUEST['genero'];
        $prod->ocupacion = $_REQUEST['ocupacion'];
        $prod->estado = $_REQUEST['estado'];
        $prod->idTutor = $_REQUEST['idTutor'];
        $this->model->Actualizar($prod);
        header('Location: index.php?c=estudiante');
    }
    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=estudiante');
    }
}