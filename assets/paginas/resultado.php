<!DOCTYPE html>
<html>
    <head>
        <title>auriga</title>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" href="./assets/css/styles_index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/styles_generales.css">
        <!-- <link rel="stylesheet" href="./assets/css/styles_contacta.css"> -->
        <!-- CSS only -->
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    </head>
    
    <body>
      <section class="nav-bar-fn">
        <div class="movil-fn">
            <div class="visible">
                <a href="./index.html">
                    <img id="iso" src="./assets/imagenes/logos/auriga_isotipo.png" alt="isotipo">
                </a>
                <img id="ham" src="./assets/imagenes/iconos/menu-hamburguesa-fn.png" alt="hamb-fb">
            </div>
            <div class="oculto">
                <div class="links-fn-movil">
                    <a id="active-fn" href="#">sobre auriga</a>
                    <a href="https://mfa.tracor.com/grupo1/auriga/index.html">sitio web</a>
                </div>
            </div>
        </div>

        <div class="desktop-fn">
            <div class="logo">
                <a href="./../../index.html">
                <img src="./assets/imagenes/logos/auriga_logotipo.png" alt="logotipo">
                </a>
            </div>
            <div class="links-fn-desktop">
                    <a id="active-fn" href="#">sobre auriga</a>
                    <a href="https://mfa.tracor.com/grupo1/auriga/index.html">sitio web</a>
            </div>  
        </div>
    </section>
        
        <section class="carrusel">
            <div class="galeria">
            <div class="row"> 
                    <div class="column">
                            <img src="./imagenes/galeria/packaging-1.jpg" style="width:100%">
                            <img src="./imagenes/galeria/ilustracion-5.jpg" style="width:100%">
                            <img src="./imagenes/galeria/web-2.jpg" style="width:100%">
                            <img src="./imagenes/galeria/modelado-2.jpg" style="width:100%">
                            <img src="./imagenes/galeria/ilustracion-1.jpg" style="width:100%">
                            <img src="./imagenes/galeria/web-3.jpg" style="width:100%">
                            <img src="./imagenes/galeria/ilustracion-6.jpg" style="width:100%">
                            <img src="./imagenes/galeria/web-1.jpg" style="width:100%">
                    </div>
                    <div class="column">
                            <img src="./imagenes/galeria/ilustracion-7.jpg" style="width:100%">
                            <img src="./imagenes/galeria/ilustracion-2.jpg" style="width:100%">
                            <img src="./imagenes/galeria/publicidad-1.jpg" style="width:100%">
                            <img src="./imagenes/galeria/branding-1.jpg" style="width:100%">
                            <img src="./imagenes/galeria/branding-2.jpg" style="width:100%">
                            <img src="./imagenes/galeria/modelado-1.jpg" style="width:100%">
                            <img src="./imagenes/galeria/modelado-4.jpg" style="width:100%">
                            <img src="./imagenes/galeria/publicidad-3.jpg" style="width:100%">
                    </div>  
                    <div class="column">
                            <img src="./imagenes/galeria/modelado-3.jpg" style="width:100%">
                            <img src="./imagenes/galeria/web-4.jpg" style="width:100%">
                            <img src="./imagenes/galeria/ilustracion-4.jpg" style="width:100%">
                            <img src="./imagenes/galeria/packaging-2.jpg" style="width:100%">
                            <img src="./imagenes/galeria/ilustracion-3.jpg" style="width:100%">
                            <img src="./imagenes/galeria/web-2-2.jpg" style="width:100%">
                            <img src="./imagenes/galeria/branding-3.jpg" style="width:100%">
                            <img src="./imagenes/galeria/publicidad-2.jpg" style="width:100%">
                    </div>
                </div>
            </div>
      
            <div id="registrado-d">
                
                <?php
                $nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
                $email = $_POST["email"];
                $telefono = $_POST["telefono"];
                $motivo = $_POST["motivo"];
        
                //conectamos a la base de datos
                $conexion_base_datos = mysqli_connect("localhost", "root", null, "mi_club");
                //comprobamo que la conexión es correcta
                if(mysqli_connect_errno()){
                    echo "Ha habido un error al conectar a la base de datos";
                    exit();
                }
        
                //cuando hemos acabado de comprobar registramos los datos en la base de datos
                $query="insert into socios (nombre, empresa,  telefono, mail,  motivo) values ('$nombre', '$apellidos',  '$telefono', '$email', '$motivo')";
                $insertar_usuario = mysqli_query($conexion_base_datos, $query);
        
        
                $query = "select * from socios where nombre='".$nombre."'";
                $resultado_inscripcion = mysqli_query($conexion_base_datos, $query);
                
                if (mysqli_num_rows ($resultado_inscripcion)>0){
                    echo "Muchas gracias ".$nombre. ", hemos recibido su solucitud de información con éxito";
                }
                
        
                ?>
                
            </div>
        </section>
        <section class="movil">
            <div id="registrado-m">
                
                <?php
                $nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
                $email = $_POST["email"];
                $telefono = $_POST["telefono"];
                $motivo = $_POST["motivo"];
        
                //conectamos a la base de datos
                $conexion_base_datos = mysqli_connect("localhost", "root", null, "mi_club");
                //comprobamo que la conexión es correcta
                if(mysqli_connect_errno()){
                    echo "Ha habido un error al conectar a la base de datos";
                    exit();
                }
        
                //cuando hemos acabado de comprobar registramos los datos en la base de datos
                $query="insert into socios (nombre, empresa,  telefono, mail,  motivo) values ('$nombre', '$apellidos',  '$telefono', '$email', '$motivo')";
                $insertar_usuario = mysqli_query($conexion_base_datos, $query);
        
        
                $query = "select * from socios where nombre='".$nombre."'";
                $resultado_inscripcion = mysqli_query($conexion_base_datos, $query);
                
                if (mysqli_num_rows ($resultado_inscripcion)>0){
                    echo "Muchas gracias ".$nombre. ", hemos recibido su solucitud de información con éxito";
                }
                
        
                ?>
                
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  
                <div class="carousel-item active " data-bs-interval="8000">
                    
                    <img src="./imagenes/trabajos/guitarra-m.jpg" class="d-block w-100" alt="...">
                    
                  </div>

                  <div class="carousel-item" data-bs-interval="8000">
                    
                    <img src="./imagenes/trabajos/web-m.jpg" class="d-block w-100" alt="...">
                    
                  </div>

                  <div class="carousel-item" data-bs-interval="8000">
                    
                    <img src="./imagenes/trabajos/estuche-m.jpg" class="d-block w-100" alt="...">
                    
                  </div>

                  <div class="carousel-item" data-bs-interval="8000">
                   
                    <img src="./imagenes/trabajos/comfort-m.jpg" class="d-block w-100" alt="...">
                   
                  </div>

                  <div class="carousel-item" data-bs-interval="8000">
                    
                    <img src="./imagenes/trabajos/lagrima-m.jpg" class="d-block w-100" alt="...">
                    
                  </div>

                  <div class="carousel-item" data-bs-interval="8000">
                    
                    <img src="./imagenes/trabajos/joseph-m.jpg" class="d-block w-100" alt="...">
                    
                  </div>

                  <div class="carousel-item" data-bs-interval="8000" >
                    
                    <img src="./imagenes/trabajos/publi-m.jpg" class="d-block w-100" alt="...">
                    
                  </div>
                </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </a> -->
            </div>
        
        </section>
            

        <script src="./assets/jquery/jquery.js"></script>
        <script src="./assets/jquery/index.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>

