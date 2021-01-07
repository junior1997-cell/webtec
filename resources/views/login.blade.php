<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Material Login Form a Responsive Widget Template :: w3layouts</title>
        <!-- meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="keywords"
            content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
        Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
        />
        <!-- /meta tags -->
        <!-- custom style sheet -->
        <link href="{{ asset('/login/css/style.css')}}" rel="stylesheet" type="text/css" />
        <!-- /custom style sheet -->
        <!-- fontawesome css -->
        <link href="{{ asset('/login/css/fontawesome-all.css')}}" rel="stylesheet" />
        <!-- /fontawesome css -->
        <!-- google fonts-->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- /google fonts-->
    </head>

    <body>
        <h1>Bienvenido a nuestra plataforma Web</h1>
        <div class="w3l-login-form">
            <h2>Ingresar al Sistema</h2>
            <form action="#" method="POST">
                <div class="w3l-form-group">
                    <label>Correo:</label>
                    <div class="group">
                        <i class="fas fa-user"></i>
                        <input type="text" class="form-control" placeholder="Username" required="required" />
                    </div>
                </div>
                <div class="w3l-form-group">
                    <label>Contraseña:</label>
                    <div class="group">
                        <i class="fas fa-unlock"></i>
                        <input type="password" class="form-control" placeholder="Password" required="required" />
                    </div>
                </div>
                <div class="forgot">
                    <a href="#">¿Se te olvidó tu contraseña?</a>
                    <p><input type="checkbox" />Recordar contraseña</p>
                </div>
                <button type="submit" href="{{ url('/dashboard')}}">Login</button>
                
            </form>
            <p class="w3l-register-p">¿No tienes una cuenta?<a href="/dashboard" class="register"> Registrarse</a></p>
        </div>
        <footer>
            <p class="copyright-agileinfo">
                &copy; 2021 CeatecSoft. Todos los derechos reservados | Diseñado por
                <a href="https://ceatec.com.pe/">CeatecSoft.</a>
            </p>
        </footer>
    </body>
</html>
