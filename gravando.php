<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title>Registro de Ligações - HRPDV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blurBg-true" style="background-color:#EBEBEB"><div class="container">
<?php
//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO
$tecnico	=	$_POST["tecnico"];
$data		=	$_POST["data"];
$horainicio	=	$_POST["horainicio"];
$cliente	=	$_POST["cliente"];
$nome		=	$_POST["nome"];
$descricao	=	$_POST["descricao"];
$horafim	=	$_POST["horafim"];

//PREPARA O CONTEÚDO A SER GRAVADO
$ptecnico	=	"Nome: $tecnico\n";
$pdata	=	"Data: $data\n";
$phorainicio =  "Hora Inicio: $horainicio\n";
$pcliente    =	"Cliente: $cliente\n";
$pnome       =	"Nome: $nome\n";
$pdescricao  =	"Descrição: $descricao\n";
$phorafim    =	"Hora de Finalizacao: $horafim\n";


//ARQUIVO TXT
$arquivo	= "registro.txt";

//TENTA ABRIR O ARQUIVO TXT
if (!$abrir = fopen($arquivo, "a")) {
        echo  "Erro abrindo arquivo ($arquivo)";
        exit;
   }

//ESCREVE NO ARQUIVO TXT


if (!fwrite($abrir, "\n$ptecnico\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n$pdata\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n$phorainicio\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n$pcliente\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n$pnome\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n$pdescricao\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n$phorafim\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }
if (!fwrite($abrir, "\n-----------------------\n\r")) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }

//FECHA O ARQUIVO 
fclose($abrir);
?>
<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=index.php">
<br><div class="card-panel" align="center">
      <span class="blue-text text-darken-2">
<p>Registro de ligação efetuado com sucesso</p>
<p>Esta página será redirecionada automáticamente ao início, caso não ocorra clique <a href="index.php">aqui</a>
</span>
 <div class="preloader-wrapper active">
			<div class="spinner-layer spinner-blue-only">
				<div class="circle-clipper left">
					<div class="circle"></div>
					</div><div class="gap-patch">
				<div class="circle"></div>
			</div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
 </div>
</div>
</body>
</html>