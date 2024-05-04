<?php
class clase
{
    private $pdo;
    public $id;
    public $cantidad;
    public $fecharegistro;
    public $nivel;
    public $estado;
    public $idtipoclase;
    public $iddocente;
    public $idusuario;
    
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
            $stmt=$this->pdo->prepare("SELECT * FROM clase WHERE estado=1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Registrar(clase $data)
    { //INSERTAR
        try {

            $sql="INSERT INTO clase(cantidad,fecharegistro,nivel,estado,idtipoclase,iddocente,idusuario)  values (?,?,?,1,?,?,?);";
            $this->pdo->prepare($sql)->execute(array(
                //$data->cod_estudiante,
                $data->cantidad,
                $data->fecharegistro,
                $data->nivel,
                $data->idtipoclase,
                $data->iddocente,
                $data->idusuario,
        
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar(clase $data)
    {  //EDITARx    
        try {
            $sql = "UPDATE clase SET cantidad=?,fecharegistro=?,nivel=?,idtipoclase=?,iddocente=?,idusuario=? WHERE id=?";
            $this->pdo->prepare($sql)->execute(array(
                
                $data->cantidad,
                $data->fecharegistro,
                $data->nivel,
                $data->idtipoclase,
                $data->iddocente,
                $data->idusuario,
                $data->id
            ));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($id) {
        //ELIMINAR
        try {
            $sql="UPDATE clase SET estado=0 WHERE id=?";
            $this->pdo->prepare($sql)->execute(array($id));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function Obtener($id)
    {
        //OBTIENE EL REGISTRO MUESTRA EN EL FORMULARIO PARA MODIFICAR -- MODAL EDITAR
        try {
            $sql="SELECT * FROM clase WHERE id=?";
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
            $stm = $this->pdo->prepare("SELECT * FROM tipoclase");
            $stm->execute();
            $rows = $stm->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }        
    }
    public function ListasDesplegable2()
    {
        try
        {            
            $stm = $this->pdo->prepare("SELECT * FROM docente");
            $stm->execute();
            $rows = $stm->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }        
    }
    public function ListasDesplegable3()
    {
        try
        {            
            $stm = $this->pdo->prepare("SELECT * FROM usuario");
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
            
            $stm = $this->pdo->prepare("SELECT id, CONCAT_WS(' ',estado,idTipoClase,idDocente) AS nomclase
        ,  Cantidad,  idUsuario FROM  clase WHERE nit LIKE '%$criterio%' OR Cantidad LIKE '%$criterio%' ORDER BY nit LIMIT 8");
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    
}