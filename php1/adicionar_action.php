<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {

        // VERICANDO EMAIL EM DUPLICIDADE
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email"); 
        $sql-> bindValue(':email', $email);
        $sql->execute();
        }
        // UPDATE
        if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar.php");
        exit;
    }

