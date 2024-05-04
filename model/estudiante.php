<?php
class estudiante
{
    private $pdo;
    public $id;
    public $ci;
    public $telefono;
    public $fechanacimiento;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $direccion;
    public $genero;
    public $ocupacion;
    public $estado;
    public $idTutor;
   
    
    public function __construct()
    {
        try
        {
            $this->pdo = database::Conectar();
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function Listar() {
        //LLENAR LA LISTA DE LA TABLA
        try {
            $stmt=$this->pdo->prepare("SELECT * FROM estudiante WHERE estado=1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(estudiante $data)
    { //INSERTAR
        try {

            $sql="INSERT INTO estudiante(ci,telefono,fechanacimiento,nombre,apellidoP,apellidoM,direccion,genero,ocupacion,estado,idTutor)  values (?,?,?,?,?,?,?,?,?,1,?);";
            $this->pdo->prepare($sql)->execute(array(
                //$data->cod_estudiante,
                $data->ci,
                $data->telefono,
                $data->fechanacimiento,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->direccion,
                $data->genero,
                $data->ocupacion,
                $data->idTutor
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(estudiante $data)
    {  //EDITARx    
        try {
            $sql = "UPDATE estudiante SET ci=?,telefono=?,fechanacimiento=?,nombre=?,apellidoP=?,apellidoM=?,direccion=?,genero=?,ocupacion=?,idTutor=? WHERE id=?";
            $this->pdo->prepare($sql)->execute(array(     
                $data->ci,
                $data->telefono,
                $data->fechanacimiento,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->direccion,
                $data->genero,
                $data->ocupacion,
                $data->idTutor,
                $data->id
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($id) {
        //ELIMINAR
        try {
            $sql="UPDATE estudiante SET estado=0 WHERE id=?";
            $this->pdo->prepare($sql)->execute(array($id));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Obtener($id)
    {
        //OBTIENE EL REGISTRO MUESTRA EN EL FORMULARIO PARA MODIFICAR -- MODAL EDITAR
        try {
            $sql="SELECT * FROM estudiante WHERE id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } 
        catch (Exception $e) 
        {
            die($e->getMessage());
        }
        
    }
    public function ListasDesplegable()
    {
        try
        {            
            $stm = $this->pdo->prepare("SELECT * FROM tutor");
            $stm->execute();
            $rows = $stm->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }        
    }
    public function Buscar($criterio)
    {
        try
        {
            $result = array();
            
            $stm = $this->pdo->prepare("SELECT id, CONCAT_WS(' ',nombre,apellidoP,apellidoM) AS nomestudiante
        ,  ci,  nit,  direccion FROM  estudiante WHERE nit LIKE '%$criterio%' OR ci LIKE '%$criterio%' ORDER BY nit LIMIT 8");
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    
}