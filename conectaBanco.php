<?php 
class ConectaBanco {
    private $dsn = "mysql:host=localhost;port=5432;dname=contato;user=root";
    private $pdo;

    function __construct()
    {
        try{
            $this->pdo = new PDO($this->dsn);
        }catch(PDOException $e){
            var_dump($e->getMessage());
            die('erroao conectar ao banco de dados');
        }
    }

    
    function query($sql){
        return $this->pdo->query($sql);
    }


    
}






