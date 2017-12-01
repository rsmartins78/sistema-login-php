<?php
// Inclui o arquivo de configuração
include('login/config.php');
 
// Inclui o arquivo de verificação de login
include('login/verifica_login.php');
 
// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');
?>

<!DOCTYPE html>
<html>
<head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>       
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title>Registro de Ligações - HRPDV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
	.wrapper {
    position: relative;
    padding-bottom: 80.00%; /* 16:9 */
    padding-top: 25px;
    height: 0;
}
.wrapper embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
	</style>
</head>
<body style="background-color:#EBEBEB"><div class="container">
<header>
<header>
	<div align="center"><br>
<a class="waves-effect waves-light btn" href="download.php"><i class="material-icons left">cloud_download</i>Download</a> 
<a class="waves-effect red lighten-1 btn" href="deleta.php" onclick="return confirm('Deseja realmente deletar os registros?\nEsta ação não pode ser desfeita.');"><i class="material-icons left">delete_forever</i>Excluir</a> 
<a class="waves-effect waves-light btn" href="index.php"><i class="material-icons left">arrow_back</i>Voltar</a> 
</div>
</header>
<main><br>
<div class="card-panel">
<div class="wrapper">
    <div class="h_iframe">
	   <embed src='registro.txt' width='600' height='600'>
    </div>
</div>
</div>
</main>
</div>
</body>
</html>
