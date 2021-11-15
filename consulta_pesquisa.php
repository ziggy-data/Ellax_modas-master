<h1> Resultado da pesquisa </h1>

<?php

// $dsnPostgres = "pgsql:host=localhost;port=5432;dbname=aulaphp;user=postgres;password=admlinux";

$dsnMysql = "mysql:host=localhost;dbname=contato";

$pdoMysql = new PDO($dsnMysql, "root"); //mysql

// $pdoPostgres = new PDO($dsnPostgres); //Postgres

$sql = "select * from pesquisa order by 1";

//foreach ($pdoPostgres->query($sql) as $row) {

echo "<table border='0'>";
echo "<tr> <td>id</td> <td>Email</td> <td>Pergunta 1</td> <td>Pergunta 2</td> ";


foreach ($pdoMysql->query($sql) as $row) {
    echo "<tr>";
    print "<td>". $row['id'] . "</td>";
    echo  "<td>". $row['email'] . "</td>";
    echo  "<td>". $row['pergunta1'] . "</td>";
    echo  "<td>". $row['pergunta2'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>