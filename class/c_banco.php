<?php
include_once("basedatos.php");
class Banco extends basedatos{
    public $codigo;
    public $nombre;
    public $cod_transaccion;
    public $created_at;
    public $updated_at;

    function __construct($codigo = NULL, $nombre = NULL, $cod_transaccion = NULL, $created_at = NULL, $updated_at = NULL) {
        $this -> codigo = $codigo;
        $this -> nombre = $nombre;
        $this -> cod_transaccion = $cod_transaccion;
        $this -> created_at = $created_at;
        $this -> updated_at = $updated_at;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCod_Transaccion() {
        return $this->cod_transaccion;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function setCodigo($codigo){
        $this ->codigo = $codigo;
    }

    public function setNombre($nombre){
        $this ->nombre = $nombre;
    }

    public function setCod_Transaccion($cod_transaccion){
        $this ->cod_transaccion = $cod_transaccion;
    }

    public function setCreated_At($created_at){
        $this ->created_at = $created_at;
    }

    public function setUpdated_At($updated_at){
        $this ->updated_at = $updated_at;
    }

    public function insertar(){
        $sql = sprintf("INSERT INTO banco (codigo, nombre, cod_transaccion, created_at, updated_at) VALUES ('%s', '%s', '%s', '%s')", $this->codigo, $this->nombre, $this->cod_transaccion, $this->created_at, $this->updated_at);
            $this->conectar();
            $this->ejecutarSQL($sql);
            $this->desconectar();
    }

    public function listar(){
        $sql = "SELECT * FROM banco";
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }

    public function consultar(){
        $sql = sprintf("SELECT * FROM banco WHERE codigo = '%s'", $this->codigo);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarRegistro();
        $this->desconectar();
        $this->nombre = $res['nombre'];
        $this->cod_transaccion = $res['cod_transaccion'];
        $this->created_at = $res['created_at'];
        $this->updated_at = $res['updated_at'];
    }

    public function eliminar(){
        $sql = sprintf("DELETE FROM banco WHERE codigo = '%s'", $this->codigo);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function actualizar(){
        $sql = sprintf("UPDATE banco SET nombre = '%s', cod_transaccion = '%s', created_at = '%s', updated_at = '%s' WHERE codigo = '%s'", $this->nombre, $this->cod_transaccion, $this->created_at, $this->updated_at, $this->codigo);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $this->desconectar();
    }

    public function buscar($valor){
        $sql = sprintf("SELECT * FROM banco WHERE codigo LIKE '%%%s%%' ", $valor);
        $this->conectar();
        $this->ejecutarSQL($sql);
        $res = $this->cargarTodo();
        $this->desconectar();
        return $res;
    }
}