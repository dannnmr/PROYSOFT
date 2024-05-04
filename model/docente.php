<?php
class docente
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
    public $especialidad;
    public $estado;
    
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
            $stmt=$this->pdo->prepare("SELECT * FROM docente WHERE estado=1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(docente $data)
    { //INSERTAR
        try {
            $sql="INSERT INTO docente(ci,telefono,fechanacimiento,nombre,apellidoP,apellidoM,direccion,genero,especialidad,estado)  values (?,?,?,?,?,?,?,?,?,1);";
            $this->pdo->prepare($sql)->execute(array(
                //$data->cod_docente,
                $data->ci,
                $data->telefono,
                $data->fechanacimiento,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->direccion,
                $data->genero,
                $data->especialidad
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(docente $data)
    {  //EDITAR
        try {
            $sql = "UPDATE docente SET ci=?,telefono=?,fechanacimiento=?,nombre=?,apellidoP=?,apellidoM=?,direccion=?,genero=?,especialidad=? WHERE id=?";
            $this->pdo->prepare($sql)->execute(array(
                $data->ci,
                $data->telefono,
                $data->fechanacimiento,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->direccion,
                $data->genero,
                $data->especialidad,
                $data->id
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($id) {
        //ELIMINAR
        try {
            $sql="UPDATE docente SET estado=0 WHERE id=?";
            $this->pdo->prepare($sql)->execute(array($id));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Obtener($id)
    {
        //OBTIENE EL REGISTRO MUESTRA EN EL FORMULARIO PARA MODIFICAR -- MODAL EDITAR
        try {
            $sql="SELECT * FROM docente WHERE id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
        }
    }
    public function Buscar($criterio)
    {
        try
        {
            $result = array();
            
            $stm = $this->pdo->prepare("SELECT id, CONCAT_WS(' ',nombre,apellidoP,apellidoM) AS nomdocente,  ci,  nit,  direccion FROM  docente WHERE nit LIKE '%$criterio%' OR ci LIKE '%$criterio%' ORDER BY nit LIMIT 8");
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}