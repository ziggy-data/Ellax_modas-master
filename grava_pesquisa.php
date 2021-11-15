<?php

// var_dump($_GET);

$email = $_POST['email'];
$pergunta1 = $_POST['pergunta1'];
$pergunta2 = $_POST['pergunta2'];

$sql = "insert into pesquisa (email, pergunta1, pergunta2) 
values('$email', '$pergunta1', '$pergunta2')";


//$dsnPostgres = "pgsql:host=localhost;port=5432;dbname=contato;user=postgres;password=admlinux";

$dsnMysql = "mysql:host=localhost;dbname=contato";

$pdoMysql = new PDO($dsnMysql, "root"); //mysql

// $pdoPostgres = new PDO($dsnPostgres); //Postgres

// $pdoPostgres->exec($sql); //Grava o insert no banco Postgres

$pdoMysql->exec($sql); //Grava o insert no banco Mysql / MariaDb

?>

<h1> Muito obrigado pela sua resposta :) </h1>