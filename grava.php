<?php

// var_dump($_GET);


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$mensagem = $_POST['mensagem'];
$data = $_POST['data'];
$novidade = $_POST['novidade'];

/*** 
   Criar a tabela no sql server:
   
	create database contato;

	use contato;

	CREATE TABLE cliente ( id INT NOT NULL identity , nome VARCHAR(90) NOT NULL ,
	email VARCHAR(90) NOT NULL , telefone INT NOT NULL ,
	sexo BINARY(1) NOT NULL , mensagem VARCHAR(120) NOT NULL ,
	data_contato DATE NOT NULL , novidade BINARY(1) NOT NULL , PRIMARY KEY (id));
 */

$sql = "insert into cliente (nome,email,telefone,sexo, mensagem, data_contato, novidade) 
values('$nome','$email', '$telefone','$sexo','$mensagem', '$data','$novidade')";


//$dsnPostgres = "pgsql:host=localhost;port=5432;dbname=contato;user=postgres;password=admlinux";

$dsnMysql = "mysql:host=localhost;dbname=contato";

$pdoMysql = new PDO($dsnMysql, "root"); //mysql

// $pdoPostgres = new PDO($dsnPostgres); //Postgres

// $pdoPostgres->exec($sql); //Grava o insert no banco Postgres

$pdoMysql->exec($sql); //Grava o insert no banco Mysql / MariaDb

?>

<h1> Muito obrigado pela sua resposta :) </h1>