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
<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ellax Modas - A loja de beleza dos seus sonhos </title>
      <link rel="stylesheet" href="style/reset.css">
      <link rel="stylesheet" href="style/style-contato.css">
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
                            <a class="nav-link active" href="formulario.html">Contato</a>
                          </li>
              
                          <li class="nav-item">
                            <a class="nav-link" href="consulta.php">Consultar BD</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="consulta_pesquisa.php">Consultar pesquisa</a>
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
<div class="w3-container">
		<h1 class="w3-center w3-animate-left">A sua mensagem foi enviada!!</h1>
		<br><br>
		<h1 class="w3-center w3-animate-left">Não se esqueça de ir visitar a nossa loja!!</h1>
		</div>
		<br><br><br>


		<div class="horarios-contato">
              <table >
                  <thead>
                      <tr>
                          <th>Dia</th>
                          <th>Horário</th>
                      </tr>
                  </thead>  
                  <tbody>
                      <tr>
                          <td>Segunda - Sexta</td>
                          <td>8h ~ 20h</td>
                      </tr>
                      <tr>
                          <td>Sabado - Domingo</td>
                          <td>8h ~ 22h</td>
                      </tr>
                      <tr>
                          <td colspan="5">Rio de Janeiro - RJ</td> 
                      </tr>
                  </tbody>  
              </table> 
          </div>
        </form>
        <footer>
			<img src="imagens/icone.png">
			<p class="copyright">&copy; Copyright Ellax Modas 2019 - 2021</p>
		</footer>
    </body>    
</html>