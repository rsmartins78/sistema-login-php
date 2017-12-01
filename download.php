<?php

// Inclui o arquivo de configuração
include('login/config.php');
 
// Inclui o arquivo de verificação de login
include('login/verifica_login.php');
 
// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
include('login/redirect.php');

$arquivo = "registro.txt";

if (!$abrir = fopen($arquivo, "a")) {
        echo  "Arquivo não encontrado";
        exit;
   }   
header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
readfile($arquivo); // lê o arquivo
exit; // aborta pós-ações
?>