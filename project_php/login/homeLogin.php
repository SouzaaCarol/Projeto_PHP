<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/favicon.svg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

    <!--Google Font 'IBM Plex Sans'-->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="../index.html" class="navbar-brand">
                <img src="../img/logo_big.svg" alt="Logo" width="150px" height="30px"
                    class="d-inline-block align-text-top">
                <span class="ms-4"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="nav">
                <li class="nav-item">
            <a class="nav-link options " href="../index.html">Home</a>
        </li>
                    
                    <li class="nav-item">
                        <a class="nav-link options " href="../page_sinopse/sinopse.html">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link options " href="../page_contato/page_contato.html">Contato</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">


                    <div class="col-lg-12 login-title">
                        <a href="javascript:history.back()" class="back-arrow">
                            <img src="../img/image 8.svg" width="20px" height="20px">
                        </a>
                        Bem vindo ao <span class="highlight-login">LOGIN</span>
                    </div>
                </div>
                <div class="col-lg-12 login-title2 ">
                    <div>Preencha os dados do login para acessar</div>
                    <div>login: adm</div>
                    <div>senha: 123</div>
                </div>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" id="username" name="username" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" id="password" name="password" required class="form-control">
                            </div>
                            <!-- Exibe a mensagem de erro, se existir -->
                            <?php
                            session_start();
                            if (isset($_SESSION['erro'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['erro'] . '</div>';
                                unset($_SESSION['erro']); 
                            }
                            ?>
                            <div class="col-lg-12 loginbttm">

                                <div class="col-lg-12 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
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
</body>

</html>