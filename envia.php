<?php

$nome = addslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);
$mensagem = addcslashes($_POST['mensagem']);

$para = "portifolioluizalessandro@gmail.com";
$assunto = "Contato - Portifolio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email.\n."Telefone: ".$telefone.\n."Mensagem: ".$mensagem;

$cabeca = "From: efexgestor@gmali.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}
?>
