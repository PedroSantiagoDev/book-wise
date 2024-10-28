<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $email_confirmacao = $_POST['email_confirmacao'];
    $senha = $_POST['senha'];

    $database->query(
        query: 'insert into usuarios (nome, email, senha) values (:nome, :email, :senha)',
        params: [
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha
        ]
    );

    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
}
