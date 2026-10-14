<?php

Class Database {
    private $host = "localhost";
    private $username = "root";
    private $senha = "";
    private $banco = " login";


    public $conn = '';

    public function conectar(){
        $this ->conn = new mysqli($this->host, $this->username, $this->senha, $this->banco);

        if($this->conn->connect_error){
            die("deu erro na conexao". $this->conn->connect_error );
        }
         return $this->conn;
    }
   
}



?>