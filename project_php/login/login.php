<?php
session_start();

$usuario_valido = 'adm';
$senha_valida = '123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username']; // Certifique-se de que os nomes dos campos estão corretos no formulário
    $senha = $_POST['password'];

    // Valida o login
    if ($usuario === $usuario_valido && $senha === $senha_valida) {
        // Usuário autenticado com sucesso
        $_SESSION['username'] = $usuario; // Salva o usuário na sessão
        header("Location: ../reserva_ingress/reserva_ingress.php"); // Redireciona para a página protegida
        exit();
    } else {
        $_SESSION['erro'] = "Usuário ou senha incorretos!"; // Armazena a mensagem de erro na sessão
        header("Location: homeLogin.php"); // Redireciona para a página de login
        exit();
    }
}
?>
