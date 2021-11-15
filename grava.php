<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$mensagem = $_POST['mensagem'];
$data = $_POST['data'];
$novidade = $_POST['novidade'];


$sql = "insert into cliente (nome,email,telefone,sexo, mensagem, data_contato, novidade) 
values('$nome','$email', '$telefone','$sexo','$mensagem', '$data','$novidade')";


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
        
        <form  action="grava_pesquisa.php" method="post">
         <fieldset>
             <legend><strong>Gostaríamos de sua opinião sobre a cuidados pessoais. </strong></legend>
             <p>Respeitando a lei LGPD, não iremos divulgar seus dados.</p>

             <label for='email'>Email:</label>
             <input required type="email" placeholder="seuemail@dominio.com" class="input-padrao" name="email"id='email' maxlength="100" >

             <div class="radio-sexo">
                <legend>Você tem interesse em adquirir roupas de marca?</legend>

                    <div class="form-check">
                        <label class="form-check-label" for="pergunta1">Não</label>
                        <input type="radio" class="form-check-input" id="pergunta1" value='0' name="pergunta1" checked>
                      </div>

                    <div class="form-check">
                        <label class="form-check-label" for="pergunta1">Sim</label>
                        <input type="radio" class="form-check-input" id="pergunta1" value='1' name="pergunta1">
                    </div>
              </div>
                    
                    <label for="pergunta2" class="form-label"> Qual nível de importância da sua estética? </label>
                    <p>Pontue de 0 a 10 sendo:  0 - Pouca importância,  10 - Muito Importante.</p>
                    <input type="number" id="pergunta2" name="pergunta2"  class="input-padrao"
                    required min="0" max="10"> 

             <input type="submit" value="enviar formulario"  class="enviar">   
            </fieldset>

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