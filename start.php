<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

		<title>The Hanged Man</title>

		<!-- Archivos CSS adicionales -->
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

	    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

	    <link rel="stylesheet" href="assets/css/owl-carousel.css">

	    <link rel="stylesheet" href="assets/css/lightbox.css">
        
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!-- ***** Header Area de navegar***** -->
	    <header class="header-area header-sticky">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                    <nav class="main-nav">
	                        <!-- ***** Logo ***** -->
	                        <a href="index.php" class="logo">
	                            <img src="assets/images/Logo.png" align="klassy cafe html template">
	                        </a>
	                        <!-- ***** fin Logo ***** -->
	                        <!-- ***** Menu de niveles  ***** -->
	                        <ul class="nav">
	                        	<li class="scroll-to-section"><a href="#reservation">Subir</a></li>	                             
	                            <li class="submenu">
	                                <a href="javascript:;">Niveles</a>
	                                <ul>
	                                    <li><a onclick="nivel(0);">Nivel 1</a></li>
	                                    <li><a onclick="nivel(1);">Nivel 2</a></li>
	                                    <li><a onclick="nivel(2);">Nivel 3</a></li>
	                                </ul>
	                            </li>
	                            <li class="scroll-to-section"><a href="index.php">Salir</a></li>
	                        </ul>        
	                        <a class='menu-trigger'>
	                            <span>Menu</span>
	                        </a>
	                        <!-- ***** fin del Menu de niveles ***** -->
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </header>
    	<!-- ***** fin del Header ***** -->
		<!-- ***** Esto es para que funcione la seleccion del niveles *****--> 
	    <section class="section" id="reservation">
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
			<!-- ***** FIN ***** -->
			<!-- ***** contenedor del juego ***** -->
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6 align-self-center">
	                    <div class="contact-form">
	                        <form id="contact" action="" method="post">
	                          	<div class="row">
	                            	<div class="col-lg-12" align="center">
	                                	<h3> Adivina, Piensa y Gana </h3>
	                            	</div><br><br><br>
	                            	<!-- ***** imagen del juego ***** -->
	                            	<div class="col-sm-12">
	                               		<div align="center" class="thumb">
                                           <img src="images/hangman/0.jpg" id="hangman" alt="hangman">
	                              		</div>
	                              	</div>
	                            </div><br>
	                            <!-- ***** ingresar letra en el juego ***** -->
	                            <div class="row">
	                            	<div class="col-lg-12">
	                            	 	Selecciona una letra:
                                    	<div id="hangman-div2">
                                  			<div>
                                            	<div id="letters">
                                                	<?php
                                                	foreach (range('A', 'Z') as $char) {
                                                    	echo '<span class="letter">' . $char . '</span>';
                                                	}
                                                	?>
                                                	<div class="clear"></div>
                                                </div>
                                            </div><br><br><br><br><br><br>
                                            <div class="col-lg-12">
                                    			<div class="start.php">
                                        			<div id="guessed-word-div">
                                            			<?= $blankWord ?>
                                        			</div>
                                        			<div id="the-word-was-div" class="display-none"></div>
                                        			<div id="play-again-div" class="display-none">
                                        				<fieldset>
                                            				<a onclick="nivel(0);" class="main-button-icon">volver a jugar</a>
                                            			</fieldset>
                                            		</div>
                                        		</div>
                                        		<div class="clear"></div>
                                    		</div>
                           				</div>
                           			</div>
                           		</div>                                       
	                            <br>
	                        </form>
	                    </div>
	                </div>
	                <div class="col-lg-6">
	                   <div class="left-text-content">
	                        <div class="section-heading">
	                            <h6>Nivel Básico</h6>
	                            <h2>The Hanged Man</h2>
	                        </div>
	                        <p>Para iniciar el  jugar debes seleccionar las letras del teclado que se visualiza debajo del tablero ¡SUERTE!.</p>
	                        <div class="row">
	                            <div class="  col-lg-6">
	                                <div class="phone">
	                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
	                                    <h4>Tiempo</h4>
	                                    <span>
                                        <div id="timer" >
                                            <div class="container" align="center">
                                                Hora:<div id="hour"> 00 </div>
                                                Minutos:<div id="minute"> 00</div>
                                                Segundos:<div id="second"> 00</div>                
                                            </div>
                                            <button hidden id="btn-comenzar">Comenzar</button>
                                        </div>
	                                    </span>
	                                </div>
	                            </div>
	                            <div class="col-lg-6">
	                                <div class="message">
	                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
	                                    <h4>Vidas</h4><br>
	                                    <span>
                                            <div id="lives-left-div">
                                                <span id="lives-left"><?= $_SESSION['lives'] ?></span>
                                            </div>
	                                    <br>
	                                    </span>
	                                </div>
	                            </div>
	                        </div>
	                            <br><br>
	                        <div class="row">
	                            <div class="col-lg-12">
	                                <div class="message">
	                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
	                                    <h4>Puntuación</h4>
	                                    <span>
	                                    	<a id="puntuacion">-</a>
	                                    </span>
	                                </div>
	                            </div>	                            
	                        </div>
	                    </div> 
	                </div>
	            </div>
	        </div>
	    </section>
	<!-- ***** Fin del Area contenedor  ***** -->
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
        
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/script.js"></script>

        <script>
            
$(document).ready(function(){
    
    var tiempo = {
        hora: 0,
        minuto: 0,
        segundo: 0
    };

    var tiempo_corriendo = null;

    $("#btn-comenzar").click(function(){
        if ( $(this).text() == 'Comenzar' )
        {
            $(this).text('Detener');                        
            tiempo_corriendo = setInterval(function(){
                // Segundos
                tiempo.segundo++;
                if(tiempo.segundo >= 60)
                {
                    tiempo.segundo = 0;
                    tiempo.minuto++;
                }      

                // Minutos
                if(tiempo.minuto >= 60)
                {
                    tiempo.minuto = 0;
                    tiempo.hora++;
                }

                $("#hour").text(tiempo.hora < 10 ? '0' + tiempo.hora : tiempo.hora);
                $("#minute").text(tiempo.minuto < 10 ? '0' + tiempo.minuto : tiempo.minuto);
                $("#second").text(tiempo.segundo < 10 ? '0' + tiempo.segundo : tiempo.segundo);
            }, 1000);
        }
        else 
        {
            $(this).text('Comenzar');
            clearInterval(tiempo_corriendo);
        }
    })
    $( "#btn-comenzar" ).trigger( "click" );
})

function nivel(id){
	//alert(id);
	//$("#level_"+id).attr('checked', 'checked');  
	document.querySelector("#level_"+id).checked = true;
	document.formulario.submit();
}
        </script>
	</body>
</html>
  

