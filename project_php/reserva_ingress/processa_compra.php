<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dia = htmlspecialchars($_POST['dia']); 
    $horario = htmlspecialchars($_POST['horario']); //  o v
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $total = (float)$_POST['total'];

    
    if ($quantity > 0 && $price > 0 && $total > 0 && !empty($horario) && !empty($dia)) {
        $mensagem = "Compra confirmada! Quantidade: $quantity, Total: R$ " . number_format($total, 2, ',', '.') . ", Dia: $dia, Horário: $horario";
    } else {
        $mensagem = "Erro ao processar a compra. Dados inválidos.";
    }
} else {
    $mensagem = "Método inválido de requisição.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="processa.css">
</head>
<body>
     <!-- NavBAR -->
      <!-- Barra de navegação -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="../index.html" class="navbar-brand">
                <img src="../img/logo_big.svg" alt="Logo"  width="150px" height="30px" class="d-inline-block align-text-top">
                <span class="ms-4"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarNav">
                <ul class="nav " >
                  <li class="nav-item">
                    <a class="nav-link options " href="../index.html">Home</a>
                </li>
                 
                    <li class="nav-item">
                      <a class="nav-link options " href="../page_contato/page_contato.html">Contato</a>
                    </li>
                    
                  </ul>
                  <div class="d-flex ml-auto">
                  <a href="../login/homeLogin.php">  <button class="btn custom-btn me-2 mr-20">Login</button></a>
                    <button class="btn custom-btn">Cadastre-se</button>
                  </div>
            </div>
        </div>
    </nav>

    <!--card-->
    
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm text-center" style="width: 22rem;">
            <h1 class="mb-4">Status da Compra</h1>
            <p class="fs-5"><?= htmlspecialchars($mensagem); ?></p>
            <a href="../index.html" class="btn-voltar">Voltar</a>
        </div>
    </div>
</body>
</html>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS não mexe -->
    <!-- primeiro o jquery.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <footer class="rodape">
    © Copyright 2024 - Ana Carolina Martins Souza, Kayke Gonçalves de Sousa, Mayara Caroline Alves Pereira.
  </footer>
</body>
</html>
