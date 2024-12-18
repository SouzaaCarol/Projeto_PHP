<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/favicon.svg">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="page_recebimento.css">
    
     <!--Google Font 'IBM Plex Sans'-->
     <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Fale Conosco</title>
</head>

<body>
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
                      <a class="nav-link options  " href="../page_sinopse/sinopse.html">Filmes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link options " href="../page_contato/page_contato.html">Contato</a>
                    </li>
                    
                  </ul>
                  <div class="d-flex ml-auto">
                    <a href="./login/homeLogin.php">  <button class="btn custom-btn me-2 mr-20">Login</button></a>
                      <button class="btn custom-btn">Cadastre-se</button>
                    </div>
               
            </div>
        </div>
    </nav>
</head>

<?php 
//Variáveis de recebimento do formulário!

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

?>
<body>

    <main>
        <div class="card">
        <div class="card-body">
    <div class="card-title"> Obrigado por entrar em contato! </div>
    <div class="card-text"> Sua mensagem: </div>
    <div id="card-form">
        <?php 
        echo "<span class='campo-form'> Nome: </span> <br> <div class='variavel-form'> $nome </div>";
        echo "<br> <span class='campo-form'> E-mail: </span> <br> <div class='variavel-form'> $email </div>";
        echo "<br> <span class='campo-form'> Assunto: </span> <br> <div class='variavel-form'> $assunto </div>";
        echo "<br> <span class='campo-form'> Mensagem: </span> <br> <div class='variavel-form'> $mensagem </div> ";
        ?>
    </div>
    <div class="botoes">
    <a href="../index.html" class="botao-confirma"> Voltar à página inicial </a>
    <a href="../page_contato/page_contato.html" class="botao-confirma"> Novo contato </a> 
    </div>
</div>
            </div>

          </div>

    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS não mexe -->
    <!-- primeiro o jquery.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <footer class="rodape">
        © Copyright 2024 - Ana Carolina Martins Souza, Kayke Gonçalves de Sousa, Mayara Caroline Alves Pereira, Nina Areal Cezario, Rafael Rodrigues de Oliveira
      </footer>
</body>
</html>