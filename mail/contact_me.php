<?php

   $nome = strip_tags(htmlspecialchars("Noel Magalhães"));
   $email_cliente = strip_tags(htmlspecialchars("nlnoel.cnb@gmail.com"));
   $Telefone = strip_tags(htmlspecialchars("(61)98371-7627"));

   /*
   $nome = strip_tags(htmlspecialchars($_POST['name']));
   $email_cliente = strip_tags(htmlspecialchars($_POST['email']));
   $Telefone = strip_tags(htmlspecialchars($_POST['Telefone']));
   */
   // Create the email and send the message
   $emailCliente = $email_cliente;
   $email_titulo = "Olá:  $nome";
   $email_corpo = "Estou testando este envio de e-mail.\n\n"."É um prazer concluir este teste";
   $emailEmpresa = "From: lealtechnologist@gmail.com\n";

   mail($emailCliente,$email_titulo,$email_corpo,$emailEmpresa);
   return true;
?>