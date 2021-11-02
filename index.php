<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio - Coca Cola</title>

</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="index.html"><img src="img/logo.svg" class="navbar-img" alt="Logo Coca-Cola"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active ml-5">
                            <a class="nav-link text-danger" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link  text-danger" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link  text-danger" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link  text-danger" href="#galeria">Galería</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link  text-danger" href="#contactenos">Contactenos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div id="inicio" class="card text-black text-center card-banner">
            <img src="img/bannerprincipal.jpg" class="card-img" alt="banner CocaCola">
            <div class="card-img-overlay text-banner w-100">
                <h1 class="card-title">Bienvenidos a Coca-Cola</h1>
                <p class="card-text text-white">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <a href="#nosotros"><button class="btn btn-danger btn-fluid">Ver más</button></a>
            </div>
        </div>

        <div id="nosotros" class="nosotros text-white text-center">
            <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat est, molestiae aperiam
                veniam vel beatae odio quidem tempore laboriosam dolor nihil temporibus similique ducimus recusandae
                dicta odit autem harum optio?Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
                voluptatem excepturi incidunt voluptatum a magni, sit molestias corporis iure, modi asperiores
                blanditiis commodi quaerat nisi autem voluptatibus rem possimus id.</p>
        </div>
        <div id="servicios">
            <div class="card-group m-3">
                <div class="card m-2">
                  <img src="img/servicio1.jpg" class="card-img-top" alt="Imagen servicio 1">
                  <div class="card-body">
                    <h5 class="card-title">Servicio 1</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-outline-danger">Ver más</button>
                  </div>
                </div>
                <div class="card m-2">
                  <img src="img/servicio2.jpg" class="card-img-top" alt="Imagen servicio 2">
                  <div class="card-body">
                    <h5 class="card-title">Servicio 2</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-outline-danger">Ver más</button>
                  </div>
                </div>
                <div class="card m-2">
                  <img src="img/servicio3.jpg" class="card-img-top" alt="Imagen servicio 3">
                  <div class="card-body">
                    <h5 class="card-title">Servicio 3</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-outline-danger">Ver más</button>
                  </div>
                </div>
              </div>
        </div>
        <div id="galeria">
            <div class="row mw-100 m-0">
                <div class="col-12 col-lg-4 p-0 color">
                    <h3>Imagen 1</h3>
                    <img class="img img-fluid w-100" src="img/servicio1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 p-0 color">
                    <h3>Imagen 2</h3>
                    <img class="img img-fluid w-100" src="img/servicio2.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 p-0 color">
                    <h3>Imagen 3</h3>
                    <img class="img img-fluid w-100" src="img/servicio3.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 p-0 color">
                    <h3>Imagen 4</h3>
                    <img class="img img-fluid w-100" src="img/servicio1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 p-0 color">
                    <h3>Imagen 5</h3>
                    <img class="img img-fluid w-100" src="img/servicio2.jpg" alt="">
                </div>
                <div class="col-12 col-lg-4 p-0 color">
                    <h3>Imagen 6</h3>
                    <img class="img img-fluid w-100" src="img/servicio3.jpg" alt="">
                </div>
            </div>
        </div>
        <div id="contactenos">
            <iframe width="520" height="445" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=445&amp;hl=en&amp;q=%20Parral+()&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>  
            <form action="index.php" method="POST" class="text-center">
                <h3>Contactanos</h3>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombres" name="nombre">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje" name="mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-dark text-center">Enviar</button>
                <?php
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $nombre=$_POST["nombre"];
                        $email=$_POST["email"];
                        $mensaje=$_POST["mensaje"];
                        if(isset($nombre)){
                            if(isset($email)){
                                if(isset($mensaje)){
                                    $para="dennisalbertotm@gmail.com";
                                    $asunto="Esto es una prueba";
                                    $cuerpo= "Nombre: ".$nombre."\n"."Email: ".$email."\n"."Mensaje: ".$mensaje;
                                    $adicional="From: noreply@jacoboamaru.com";
                                    mail($para,$asunto,$cuerpo,$adicional);
                                    ?>
                                        <p>Envio Exitoso!!!</p>
                                    <?php
                                }
                            }
                        }
                    }
                ?>
              </form>
        </div>
    </main>
    <footer>
    <div class="row justify-content-around w-100">
            <div class="mt-3 col-sm-12 col-lg-2">
                <img src="img/logo-blanco.png" alt="">
                <h6 class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
            </div>
            <div id="temas" class="col-sm-12 col-lg-2 text-white text-center">
                <h5>Temas Relacionados</h5>
                <ul>
                    <a href="#"><li >Tema 1</li></a>
                    <a href="#"><li>Tema 2</li></a>
                    <a href="#"><li>Tema 3</li></a>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-2 text-white text-center">
                <h5>Datos de contacto</h5>
                    <p>dennisalbertotm@gmail.com</p>
                    <p>+56 956007372</p>
                    <p>Psje. Roberto Ortega #41 - Parral Maule - Chile</p>
            </div>
            <div class="col-sm-12 col-lg-2 text-white text-center">
                <h5>Redes Sociales</h5>
                    <a href="#"><i class="bi bi-facebook m-2"></i></a>
                    <a href="#"><i class="bi bi-twitter m-2"></i></a>
                    <a href="#"><i class="bi bi-whatsapp m-2"></i></a>
                </ul>
            </div>
        </div>
        <div class="bg-secondary text-white text-center p-2">
            <p><h6>&copy; Derechos reservados - 2021</h6></p>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>

</html>