<!doctype html>

<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
  header("Location:homeLogin.php"); // Redireciona para o login se não estiver autenticado
  exit();
}
?>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../img/favicon.svg">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="reserva.css">

  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;0,400;1,100..900;1,400&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;0,400;1,100..900;1,400&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">




  <title>Reservar Ingressos</title>
</head>


<!-- Corpo da página -->

<body>

<script>
    function abrirPopup() {
        document.getElementById("popup-confirmacao").style.display = "block"; // Mostra o popup
        document.getElementById("popup-overlay").style.display = "block"; // Mostra o overlay
    }

    function fecharPopup() {
        document.getElementById("popup-confirmacao").style.display = "none"; // Esconde o popup
        document.getElementById("popup-overlay").style.display = "none"; // Esconde o overlay
    }
</script>
<!--NavBAR -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="../index.html" class="navbar-brand">
        <img src="../img/logo_big.svg" alt="Logo" width="150px" height="30px" class="d-inline-block align-text-top">
        <span class="ms-4"></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  " id="navbarNav">
        <ul class="nav ">
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
          <a href="../login/logout.php">
            <button class="btn custom-btn me-2 mr-20">Sair</button>
          </a>


        </div>

      </div>
    </div>
  </nav>

   
  
  <div class="container d-flex justify-content-center align-items-center card-container">
 
    <div class="card p-4">
    <h6 class="text-black text-center ">Bem-vindo, <?php echo $_SESSION['username']; ?>!<br>Escolha o melhor dia e horário</h6>
      <div class="card-body text-center">
        <div class="date-buttons">
          <button class="date-button">
            <div class="dia">Seg</div>
            <div class="num">12</div>
          </button>
          <button class="date-button">
            <div class="dia">Ter</div>
            <div class="num">13</div>
          </button>
          <button class="date-button">
            <div class="dia">Qua</div>
            <div class="num">14</div>
          </button>
          <button class="date-button">
            <div class="dia">Qui</div>
            <div class="num">15</div>
          </button>
        </div>
        <img src="../img/img_charlin.svg" class="card-img-center" alt="Poster Charlin Chaplin">
        <div class="horarios">
          <button class="time-button">10:00</button>
          <button class="time-button">14:00</button>
          <button class="time-button">18:00</button>
        </div>
        <div class="row">
          <div class="col-7">
            <h5>‘Charlie Chaplin, o Gênio da Liberdade’: os ideais chaplinianos</h5>
          </div>
          <div class="col-3">
            <div class="trailer">
              <img src="../img/tv.svg" alt="Imagem de TV" />
              <a href="https://youtu.be/0ApMSyQkk1c?si=I7e-0XjepZZstkqH"> Trailer
              </a>
            </div>
          </div>
        </div>
        <p class="card-text">"Charlie Chaplin, le génie de la liberté" é um documentário de 2020 que retrata a vida de
          Charlie Chaplin, desde sua infância em Londres até sua carreira artística.</p>
        <div class="container d-flex justify-content-center align-items-center card-containe">
        <div class="login text-center">
    <a href="reserva_ingresso2.html" class="reserve-btn">Reservar Ingresso</a>
</div>

</div>   
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS não mexe -->
  <!-- primeiro o jquery.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <footer class="rodape">
    © Copyright 2024 - Ana Carolina Martins Souza, Kayke Gonçalves de Sousa, Mayara Caroline Alves Pereira.
  </footer>
</body>

</html>