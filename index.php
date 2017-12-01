<?php
// Inclui o arquivo de configuração
include('login/config.php');
 
// Inclui o arquivo de verificação de login
include('login/verifica_login.php');
 
// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');

//ARQUIVO TXT
$arquivo	= "registro.txt";

//TENTA ABRIR O ARQUIVO TXT
if (!$abrir = fopen($arquivo, "a")) {
        echo  "Erro abrindo arquivo ($arquivo)";
        exit;
   }
//FECHA O ARQUIVO 
fclose($abrir);

?>

<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title>Registro de Ligações - HRPDV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--<script language="JavaScript" type="text/javascript">
	alert ("ALERTA - LEIA COM ATENÇÃO\n\n1º - Realize o registro de cada ligação.\n2º - Faça o download ao final do plantão e verifique se todos os contatos estão gravados corretamente.\n3º - Apague os registros somente após validação do download.")
	</script>-->
</head>
<body style="background-color:#EBEBEB"><div class="container">

 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<main><br/>
<div class="card-panel">
  <div class="row">
    <form class="col s12" method="post" action="gravando.php">
 <div>
    <h5 class="center-align">Registro de Ligações</h5>
	<h6 class="center-align"><?php echo $_SESSION['nome_usuario']?></b>, <a href="login/sair.php">clique aqui</a> para sair.</h6>
	<h6 class="center-align"><a href="cria-usuarios/">Criar usuário</a></h6>

  </div>
	 <div class="row">
        <div class="input-field col s12">
		<div>
    <h6 class="left-align">Técnico:</h6>
  </div>
          <input type="text" name="tecnico" required="required" class="validate">
          <!--<label for="text">Técnico:</label>-->
        </div>
      </div>
	
      <div class="row">
        <div class="input-field col s6">
		<div>
    <h6 class="left-align">Cliente:</h6>
  </div>
          <input type="text" name="cliente" required="required" class="validate">
          <!--<label for="cliente">Cliente:</label>-->
        </div>
        <div class="input-field col s6">
		<div>
    <h6 class="left-align">Nome:</h6>
  </div>
          <input type="text" name="nome" required="required" class="validate">
          <!--<label for="nome">Nome:</label>-->
        </div>
      </div>
     
	  
	  <div class="row">
        <div class="input-field col s12"> 
<div>
    <h6 class="left-align">Data:</h6>
  </div>		
		  <input type="date" name="data" required="required" placeholder="Data" class="validate">
          <!--<label for="data">Data</label>-->
        </div>
      </div>
	  
	  <div class="row">
        <div class="input-field col s12">  
		  <div>
    <h6 class="left-align">Hora de Inicio:</h6>
  </div>
          <input type="time" name="horainicio" required="required" placeholder="Hora de Inicio" class="validate"/>        
          <!--<label for="horainicio">Hora de Inicio</label>-->
        </div>
      </div>
	  
      <div class="row">
        <div class="input-field col s12">
		<div>
    <h6 class="left-align">Descrição do atendimento:</h6>
  </div>
          <textarea name="descricao" class="materialize-textarea" class="validate" required="required"></textarea>
          <!--<label for="textarea1">Descrição do atendimento:</label>-->
        </div>
      </div>
  
        
	  
	  <div class="row">
        <div class="input-field col s12">  
<div>
    <h6 class="left-align">Hora de Finalização:</h6>
  </div>        
          <input type="time" name="horafim" required="required" placeholder="Hora de Finalização" class="validate">        
          <!--<label for="horafim">Hora de Finalização</label>-->
        </div>
      </div>
	  <center>
    <button class="btn waves-effect waves-light" type="submit" name="action">Gravar
		<i class="material-icons right">send</i>
	</button>	 
	
	<button class="btn waves-effect red lighten-1" type="reset" name="action">Limpar
		<i class="material-icons right">delete</i>
	</button>
	
  <a class="waves-effect waves-light btn" href="ler.php">
	<i class="material-icons left">description</i>Verificar Registros
  </a>
  </center>
    </form>
  </div>
</div>
</div>
</main>
</body>
</html>
