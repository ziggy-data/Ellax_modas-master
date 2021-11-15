<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ellax Modas - A loja de beleza dos seus sonhos </title>
      <link rel="stylesheet" href="style/reset.css">
      <link rel="stylesheet" href="style/style-contato.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
<body class="fundo-contato">
        <header>
            <div class="caixa container-fluid">
                <img src="imagens/icone.png" alt="Ellax Modas" >  
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255, 192, 203);" >
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="loja.html">Loja</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link " href="sobre.html">Quem Somos</a>
                          </li>
                          
                          <li class="nav-item">
                            <a class="nav-link" href="formulario.html">Contato</a>
                          </li>
              
                          <li class="nav-item">
                            <a class="nav-link active" href="consulta.php">Consultar contato</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="consulta_pesquisa.php">Consultar pesquisa</a>
                          </li>
                        </ul>
                        <span class="navbar-text numero">
                          📞 Zap: (21) 97699 - 2852
                        </span>
                      </div>
                    </div>
                  </nav>
            </div>
        </header>

    <div class="container">
    <h1> Resultado da pesquisa do banco de dados</h1>
    <table class="horarios-contato">
        <?php
        //http://localhost/pesquisa/consulta.php

        // $dsnPostgres = "pgsql:host=localhost;port=5432;dbname=contato;user=postgres;password=admlinux";

        $dsnMysql = "mysql:host=localhost;dbname=contato";

        $pdoMysql = new PDO($dsnMysql, "root"); //mysql

        // $pdoPostgres = new PDO($dsnPostgres); //Postgres

        $sql = "select * from cliente order by 1";

        //foreach ($pdoPostgres->query($sql) as $row) {

        echo "<tr > <td>id</td> <td>nome</td> <td>Email</td>  <td>telefone</td> <td>sexo</td> <td>mensagem</td> <td>data</td> <td>novidade</td> ";

        foreach ($pdoMysql->query($sql) as $row) {
            echo "<tr>";
            print "<th>". $row['id'] . "</td>";
            echo  "<td>". $row['nome'] . "</td>";
            echo  "<td>". $row['email'] . "</td>";
            echo  "<td>". $row['telefone'] . "</td>";
            echo  "<td>". $row['sexo'] . "</td>";
            echo  "<td>". $row['mensagem'] . "</td>";
            echo  "<td>". $row['data_contato'] . "</td>";
            echo  "<td>". $row['novidade'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>

  <footer>
      <img src="imagens/icone.png">
      <p class="copyright">&copy; Copyright Ellax Modas 2019 - 2021</p>
  </footer>
</body>
</html>