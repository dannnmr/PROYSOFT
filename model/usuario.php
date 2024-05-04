<?php
class usuario{
    private $pdo;
    public $id;
    public $ci;
    public $telefono;
    public $nombre;
    public $apellidoP;
    public $apellidoM;
    public $pass;
    public $username;
    public $idtipousuario;
    public $idpermiso;
    public $estado;

    public function __construct()
    {
        try{
            $this->pdo =database::Conectar();
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function Listar(){
        try{
            $stmt=$this->pdo->prepare("SELECT * FROM usuario where estado=1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function Registrar(usuario $data)
    {
        try{
            $sql="INSERT INTO usuario(ci,telefono,nombre,apellidoP,apellidoM,pass,username,idtipousuario,idpermiso,estado) values(?,?,?,?,?,?,?,?,?,1);";
            $this->pdo->prepare($sql)->execute(array(
                $data->ci,
                $data->telefono,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->pass,
                $data->username,
                $data->idtipousuario,
                $data->idpermiso,    
            ));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function Actualizar(usuario $data){
        try{
            $sql="UPDATE usuario set ci=?,telefono=?,nombre=?,apellidoP=?,apellidoM=?,pass=?,username=?,idtipousuario=?,idpermiso=? WHERE id=?";
            $this->pdo->prepare($sql)->execute(array(
                $data->ci,
                $data->telefono,
                $data->nombre,
                $data->apellidoP,
                $data->apellidoM,
                $data->pass,
                $data->username,
                $data->idtipousuario,
                $data->idpermiso,
                $data->id
            ));
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function Eliminar($id){
        try{
            $sql="SELECT *FROM usuario WHERE id=?";
            $stm=$this->pdo->prepare($sql);
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){

        }
    }
    public function Obtener($id)
    {
        //OBTIENE EL REGISTRO MUESTRA EN EL FORMULARIO PARA MODIFICAR -- MODAL EDITAR
        try {
            $sql="SELECT * FROM usuario WHERE id=?";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
        }
    }
    public function ListasDesplegable()
    {
        try
        {            
            $stmt = $this->pdo->prepare("SELECT * FROM tipousuario");
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }        
    }
    public function ListasDesplegableP()
    {
        try
        {            
            $stmt = $this->pdo->prepare("SELECT * FROM permiso");
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }        
    }
    //HACER BUSCAR TAREA PARA :DANIELA
}
?>