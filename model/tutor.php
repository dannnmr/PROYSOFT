<?php
class tutor
{
    private $pdo;
    public $id;
    public $ci;
    public $telefono;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $parentesco;
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
            $stmt=$this->pdo->prepare("SELECT * FROM tutor WHERE estado=1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function Registrar(tutor $data)
    { //INSERTAR
        try {
            $sql="INSERT INTO tutor(ci,telefono,nombre,apellidoP,apellidoM,parentesco,estado)  values (?,?,?,?,?,?,1);";
            $this->pdo->prepare($sql)->execute(array(
                //$data->cod_estudiante,
                $data->ci,
                $data->telefono,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->parentesco,
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(tutor $data)
    {  //EDITAR
        try {
            $sql = "UPDATE tutor SET ci=?,telefono=?,nombre=?,apellidoP=?,apellidoM=?,parentesco=? WHERE id=?";
            $this->pdo->prepare($sql)->execute(array(
                
                $data->ci,
                $data->telefono,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->parentesco,
                $data->id
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($id) {
        //ELIMINAR
        try {
            $sql="UPDATE tutor SET estado=0 WHERE id=?";
            $this->pdo->prepare($sql)->execute(array($id));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Obtener($id)
    {
        //OBTIENE EL REGISTRO MUESTRA EN EL FORMULARIO PARA MODIFICAR -- MODAL EDITAR
        try {
            $sql="SELECT * FROM tutor WHERE id=?";
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
            
            $stm = $this->pdo->prepare("SELECT id, CONCAT_WS(' ',nombre,apellidoP,apellidoM)  FROM  estudiante WHERE nit LIKE '%$criterio%' OR ci LIKE '%$criterio%' ORDER BY nit LIMIT 8");
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    
}