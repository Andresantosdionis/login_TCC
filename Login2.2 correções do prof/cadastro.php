<?php

$teste =  $_POST['name'];
echo $teste;


session_start();

require_once "config.php";

$error = ""; // Inicializa a variável de erro

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se 'name', 'email' e 'password' foram enviados no formulário
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta SQL para verificar as credenciais do usuário
        $sql = "SELECT * FROM usuario WHERE nome = ? AND email = ?";

        // Prepara a consulta
        $stmt = $conn->prepare($sql);

        // Verifica se a preparação da consulta foi bem sucedida
        if ($stmt) {
            // Liga os parâmetros e executa a consulta
            $stmt->bind_param("ss", $name, $email);
            $stmt->execute();

            // Obtém o resultado da consulta
            $result = $stmt->get_result();

            // Verifica se o usuário foi encontrado
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();

                // Verifica se a senha está correta
                if (password_verify($password, $row['password'])) {
                    // Autenticação bem sucedida, inicia a sessão
                    $_SESSION["loggedin"] = true;
                    header("Location: site.html");
                    exit;
                } else {
                    // Senha incorreta
                    $error = "Senha incorreta";
                }
            } else {
                // Usuário não encontrado
                $error = "Usuário não encontrado";
            }
        } else {
            // Erro na preparação da consulta
            $error = "Erro na preparação da consulta";
        }
    } else {
        // Campos do formulário não foram recebidos
        $error = "Todos os campos devem ser preenchidos";
    }
}
?>