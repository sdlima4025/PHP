<?php
require 'config.php';
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) {
        // VERIFICAÇÃO DE EMAIL EXISTENTE
       

      // UPDATE usuarios SET name = '...', email = '...' WHERE id = '...';
      $sql = $pdo->prepare("UPDATE usuarios SET nome= :nome, email= :email WHERE id= :id");
      $sql->bindValue(':nome', $name);
      $sql->bindValue(':email', $email);
      $sql->bindValue(':id', $id);
      $sql->execute();
       
        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar.php");
        exit;
    }

