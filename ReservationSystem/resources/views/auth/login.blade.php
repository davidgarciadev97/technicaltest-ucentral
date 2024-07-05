<!doctype html>
<html lang="en">
    <head>
        <title>Iniciar Sesión</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
            href="{{ asset('assets/styles.css')}}"
            rel="stylesheet"
        />
        
        <!-- <link rel="stylesheet" href="{{ asset('assets/styles.css')}}"> -->
    </head>

    <body>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500&display=swap" rel="stylesheet">
    </head>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-7 intro-section">
            <div class="brand-wrapper">

            </div>
            <div class="intro-content-wrapper">
                <h1 class="intro-title">Sistema de Reservación</h1>
            </div>
            <div class="intro-section-footer">
                <na class="footer-nav">
                </na>
            </div>
            </div>
            <div class="col-sm-6 col-md-5 form-section">
            <div class="login-wrapper">
                <h2 class="login-title">Iniciar Sesión!</h2>
                <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="userField" class="sr-only">Usuario</label>
                    <input type="text" name="userName" id="userField" class="form-control" placeholder="Usuario">
                </div>
                <div class="form-group mb-3">
                    <label for="passwordField" class="sr-only">Contraseña</label>
                    <input type="password" name="password" id="passwordField" class="form-control" placeholder="Contraseña">
                </div>
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <button class="btn login-btn" type="submit">Ingresar</button>
                    <!-- <input name="login" id="login" class="btn login-btn" type="button" value="Ingresar"> -->
                </div>
                </form>           
                <p class="login-wrapper-footer-text"><a href="{{route('register')}}" class="text-reset">Crear cuenta</a></p>
            </div>
            </div>
        </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
