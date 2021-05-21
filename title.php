<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>The Hanged Man</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area de navegación ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/Logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Menu de navegación ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#about">¿Qué debo saber?</a></li>
                            <li class="scroll-to-section"><a href="#offers">Niveles</a></li>
                            <li class="scroll-to-section"><a onclick="enviar_formulario();">Jugar</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** FIN DE Menu  ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- *****FIN DEL Area  Header ***** -->

    <!-- *****  Area Banner   ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>TheHangedman</h4>
                            <h6>VIVE TU EXPERIENCIA</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#offers">Comenzar a Jugar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- imangen 1-->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- imangen 2 -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- imangen 3 -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Fin del Area Banner ***** -->

    <!-- ***** Sección del ¿Qué debo Saber? ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">     
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Instrucciones</h6>
                            <h2>¿Qué debo Saber?</h2>
                        </div>
                        <p>El programa propondrá aleatoriamente una palabra, el jugador deberá introducir las letras que piense que contiene la palabra.
                            <br>Se cuenta con una puntuación de 12000 puntos que irá disminuyendo:
                            <br>•   Cuando la letra elegida sea errada.
                            <br> El juego irá pidiendo letras hasta que completar la palabra secreta.
                            <br> Al cometer más de diez (10), cinco (5), tres (3) fallos dependiendo el nivel, quedara sin puntos y perderá. 
                            <br> El juego cuenta con un cronometro en el cual puede visualizar el tiempo desde que inicio la partida.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" target="_blank" href="http://www.youtube.com/watch?v=l650Akhr8nA&ab_channel=EnC%C3%81JAlo%2aElRegaloqueenCAJA%2a"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** fin de Sección ***** -->

    <!-- ***** Esto es para que me funcione la seleccion del niveles ***** -->
    <div id="hangman-div">
        <form id="formulario" name="formulario" action="controller.php" method="POST" hidden>
            <input type="hidden" name="action" value="1" />
            <div class="center">
                <div id="levels-div">
                    <span id="level">
                        <input type="radio" name="level" checked="checked" id="level_0" value="0">
                            <label for="level_0">Dificultad facil: tendras 10 vidas.</label><br>
                        <input type="radio" name="level" id="level_1" value="1">
                            <label for="level_1">Dificultad media: tendras 5 vidas.</label><br>
                        <input type="radio" name="level" id="level_2" value="2">
                            <label for="level_2">Dificultad dificil: tendras 3 vidas.</label>
                    </span>
                </div>
                <div>
                    <input type="submit" value="Jugar!!!" id="submit-button" />
                </div>
            </div>
        </form>
    </div>               
    <!-- ***** FIN ***** -->

    <!-- ***** Sección para Escoger los niveles y entrar al juego***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Niveles</h6>
                        <h2>Cuenta con 3</h2>
                    </div>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.jpg" alt="">
                                                            <h4>Nivel Básico</h4>
                                                            <p>Posee diez (10) vida, esto quiere decir que tendrás 10 oportunidades para comerte fallos de los contrario perderás.</p>
                                                            <div class="price">
                                                                <a onclick="nivel(0);"><h6>Jugar 0</h6></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.jpg" alt="">
                                                            <h4>Nivel intermedio</h4>
                                                            <p>Posee cinco (5) vida, esto quiere decir que tendrás 5 oportunidades para comerte fallos de los contrario perderás.</p>
                                                            <div class="price">
                                                            <a onclick="nivel(1);"><h6>Jugar </h6></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.jpg" alt="">
                                                            <h4>Nivel experto</h4>
                                                            <p>Posee tres (3) vida, esto quiere decir que tendrás 3 oportunidades para comerte fallos de los contrario perderás.</p>
                                                            <div class="price">
                                                            <a onclick="nivel(2);"><h6>Jugar </h6></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** fin de la sección ***** --> 
    
    <!-- ***** Footer ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright The Hanged Man.
                        
                        <br>Design: Odalys Urbina</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

    <script>
        function enviar_formulario(){
            document.formulario.submit()
        }

        function nivel(id){
            //alert(id);
            //$("#level_"+id).attr('checked', 'checked');  
            document.querySelector("#level_"+id).checked = true;
            document.formulario.submit();
        }
    </script>
  </body>
</html>
