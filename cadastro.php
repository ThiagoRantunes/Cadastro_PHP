<?php

include "config.php";

if(isset($_POST)){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $stmt = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)");

    $stmt->bind_param("sss", $nome, $email, $senha);

    $stmt->execute();

    header("Location: index.php");

}