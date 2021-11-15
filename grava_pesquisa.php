<?php

// var_dump($_GET);

$email = $_GET['email'];
$pergunta1 = $_GET['pergunta1'];
$pergunta2 = $_GET['pergunta2'];

/**
 * Criar a tabela no mysql ou no postgresql
  create table pesquisa (
	id serial primary key,
	email varchar(100),
	pergunta1 integer,
	pergunta2 integer
    );
 */

$sql = "insert into pesquisa (email, pergunta1, pergunta2) 
values('$email', '$pergunta1', '$pergunta2')";


//$dsnPostgres = "pgsql:host=localhost;port=5432;dbname=aulaphp;user=postgres;password=admlinux";

$dsnMysql = "mysql:host=localhost;dbname=contato";

$pdoMysql = new PDO($dsnMysql, "root"); //mysql

// $pdoPostgres = new PDO($dsnPostgres); //Postgres

// $pdoPostgres->exec($sql); //Grava o insert no banco Postgres

$pdoMysql->exec($sql); //Grava o insert no banco Mysql / MariaDb

?>

<h1> Muito obrigado pela sua resposta :) </h1>