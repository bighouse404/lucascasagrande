<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "lucas.casagrande0120@gmail.com";
  $assunto = "Mensagem de ".$email.com
  mail($to,$assunto,$mensagem);
?>