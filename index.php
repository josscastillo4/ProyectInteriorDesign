<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>HOME</title>
	<!-- librerias JQUERY -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
		<!-- ESTILOS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/movil.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<!-- librerias SLIDE -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="slide/responsiveslides.min.js"></script>

	<!-- ICONOS Y TIPOGRAFIA -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Dosis|Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<!-- JAVASCRIPT CODIGOS -->
	<script>
posicionarMenu();

$(window).scroll(function() {    
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('#cabecera').outerHeight(true);
    var altura_del_menu = $('#menu').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header){
        $('#menu').addClass('fixed');
        $('section').css('padding-top', (altura_del_menu) + 'px');
    } else {
        $('#menu').removeClass('fixed');
        $('section').css('padding-top', '0');
    }
}

</script>
	  <script>
  		$(function() {
    		$(".rslides").responsiveSlides();
  		});
 
		$(document).ready(function(){


			//CLIP

		$('#leer').click(function(){
			$('#toggle').slideToggle();
		});
		$('#leer2').click(function(){
			$('#toggle2').slideToggle();
		});
		$('#leer3').click(function(){
			$('#toggle3').slideToggle();
		});

		});
	</script>

</head>
<body>
	<script>
		$('#tossingBtn').click(function() {
			$(this).each(function(){
					$('#icono').removeClass();				
					$('#icono').addClass("tossing");
				});	
		});

			$('#floatBtn').click(function() {
			$(this).each(function(){
					$('fas fa-long-arrow-alt-down').removeClass();				
					$('fas fa-long-arrow-alt-down').addClass("#floating");
				});	
		});

	
	</script>	
	<!---CABECERA-->
	<header id="cabecera">
				<figure id="logo">
					<img src="img/logo.png" alt="">
				</figure>
				<aside>
					<section id="num">
						<div id="icono" class="tossing">
							<i class="fas fa-phone-square"></i>
						</div>
							<h2 id="celular">123-456-7890</h2>
					</section>
						<p><em>9863 - 9867 Mill Road, Cambridge, MG09 99HT.</em></p>
				</aside>
		</header>
		<!---MENU-->
			<nav id="menu">
				<a id="icono-bar" href="#">
					<i class="fas fa-bars" id="bigEntrance"></i>
				</a>
				<ul class="lista">
				<li><a href="index.php" class="ancla"><i class="fas fa-home"></i> HOME</a></li>
				<li><a href="aboutus.html" class="ancla">ABOUT US <i class="fas fa-caret-down"></i></a>
					<ul>
						<li><a href="gallery.html" class="ancla">Gallery</a></li>
						<li><a href="" class="ancla">Submenu2 <i class="fas fa-caret-right"></i></a>
							<ul id="sub">
								<li><a href="" class="ancla">Submenu1</a></li>
								<li><a href="" class="ancla">Submenu2</a></li>
								<li><a href="" class="ancla">Submenu3</a></li>
								<li><a href="" class="ancla">Submenu4</a></li>
							</ul>
						</li>
						<li><a href="" class="ancla">Submenu3</a></li>
						<li><a href="" class="ancla">Submenu4</a></li>
					</ul>
				</li>
				<li><a href="services.html" class="ancla">SERVICES</a></li>
			</ul>
		</nav>
<!----MENU MVOL---->
<header id="menu-mobilee">
	<nav id="navigation">

            <div class="control-menu">
                <a href="#navigation" class="open"><span>MENU</span></a>
                <a href="#" class="close"><span>CERRAR</span></a>

            </div>

		
		<ul class="nav-items">
       
			<li id="Web-Dev"><a href="index.php"> <span>Home</span></a></li>
            <li id="Mobile"><a href="aboutus.html"><span>AboutUs</span></a>
				<ul>
					<li id="Net-VS"><a href="gallery.html"><span>Gallery</span></a></li>
				</ul>
            </li>
            <li id="Data"><a href="services.html"><span>Services</span></a></li>
		</ul>

	</nav>
</header>
		<div id="flecharriba">
			<i class="fas fa-angle-up"></i>
		</div>
			<!---SLIDER-->
			<section id="slider">
				<ul class="rslides">
  					<li><img src="img/slide1.jpg" alt=""></li>
  					<li><img src="img/slide2.jpg" alt=""></li>
  					<li><img src="img/slide3.jpg" alt=""></li>
  					<li><img src="img/slide4.jpg" alt=""></li>
  					<li><img src="img/slide5.jpg" alt=""></li>
  					<li><img src="img/slide6.jpg" alt=""></li>
				</ul>
				<div id="flecha-flotante">
					<i class="fas fa-long-arrow-alt-down" id="floating"></i>
				</div>
				<button class="boton-log"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Newsletter</button>
					<h2>Centro de capacitación para el trabajo Industrial</h2>
			</section>

    <!---MODAL---->

	<div id="id01" class="modal">
  
  <form class="modal-content animate" action=" ">
  	<h3>¡Recibe nuevas ideas para tu casa!</h3>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" name="uname" required>
      <button type="submit">Suscribirse</button>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laborum autem asperiores, quisquam reiciendis fugit accusamus nobis.</p>
    </div>

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  </form>
</div>
			 <!---ARTICULOS-->
		<section id="articulos">
			<article>
					<h3>Our Work</h3>
					<img src="img/foto1.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit enim officia facere reprehenderit ipsam non necessitatibus ab earum incidunt molestias architecto, iste, quisquam quaerat deserunt. Doloremque suscipit esse tenetur ratione</p>
				<hr class="raya">
			</article>
			<article>
					<h3>Ideas & Design Center</h3>
					<img src="img/foto2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit enim officia facere reprehenderit ipsam non necessitatibus ab earum incidunt molestias architecto, iste, quisquam quaerat deserunt. Doloremque suscipit esse tenetur ratione</p>
				<hr class="raya">
			</article>
			<article>
					<h3>Style, Comfort, Quality</h3>
					<img src="img/foto3.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit enim officia facere reprehenderit ipsam non necessitatibus ab earum incidunt molestias architecto, iste, quisquam quaerat deserunt. Doloremque suscipit esse tenetur ratione</p>
				<hr class="raya">
			</article>
		</section>

		<section id="cont-redmore">
			<a id="leer">READ MORE</a>

			<a id="leer2">READ MORE</a>

			<a id="leer3">READ MORE</a>
		</section>
	<section id="contenido">
			<section id="toggle">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eius fuga quisquam veniam dicta, ab consequuntur, molestias nisi sit. Voluptas ex explicabo ea minima iste voluptate ullam, adipisci veniam, sit!</p>
			</section>
		<section id="toggle2">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eius fuga quisquam veniam dicta, ab consequuntur, molestias nisi sit. Voluptas ex explicabo ea minima iste voluptate ullam, adipisci veniam, sit!</p>
			</section>
			<section id="toggle3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eius fuga quisquam veniam dicta, ab consequuntur, molestias nisi sit. Voluptas ex explicabo ea minima iste voluptate ullam, adipisci veniam, sit!</p>
			</section>
	</section>

		<section id="formulario">
			<section id="contactanos">
				<h1>¡Contáctanos!</h1>
				<h2>Somos tu mejor opción</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste animi enim atque tempore ratione! Quam ratione voluptates, consequatur amet voluptatibus nostrum nam dolores recusandae odit laborum molestiae cumque accusamus, nihil.</p>
			</section>

			<form method="post" action="enviar_contacto.php" id="formu">
				<h2>CONTACTO</h2>
			<input class="inputs" class="nombre" type="text" name="nombre" placeholder="Nombre" required="">
           <input class="inputs" class="email" type="email" name="email" placeholder="E-mail" required="">
           <input class="inputs" class="telefono" type="phone" name="telefono" placeholder="Teléfono" required="">
           <textarea name="comentarios" placeholder="Mensaje" required=""></textarea>
           <input id="enviar" type="submit" name="enviar" value="Enviar">
			</form>
		</section>
	<section id="our-projects">
		<section id="img-position">
			<h3>Our Projects</h3>
			<figure>
			<img src="img/proyect1.jpg" alt="">
			<img src="img/proyect2.jpg" alt="">
			</figure>
			<figure>
			<img src="img/proyect3.jpg" alt="">
			<img src="img/proyect4.jpg" alt="">
			</figure>
		</section>
		
		<section id="review-news">
			<h3>Reviews</h3>
			<article id="articulo-1">
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<p>Review by Sam Kromstain</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. <a href="#">[...]</a></p>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<p>Review by Sam Kromstain</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. <a href="#">[...]</a></p>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<p>Review by Sam Kromstain</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. <a href="#">[...]</a></p>
			</article>
			<h3>Our News</h3>
			<article id="articulo-2">
				<article id="art-sep">
					<div id="sep-15">
						<h3>15</h3>
						<h3>SEP</h3>
					</div>
					<section class="parrafitos">
					<p>Nulla venenatis.</p>
					<p>In pede mi, aliquet sit amet.
					Lorem ipsum dolor sit amet, consec hendrerit mauris. Phasellus porta. <a href="#">[...]</a></p>
					</section>
				</article>
				<article id="art-sep2">
					<div id="sep-11">
						<h3>15</h3>
						<h3>SEP</h3>
					</div>
					<section class="parrafitos">
					<p>Nulla venenatis.</p>
					<p>In pede mi, aliquet sit amet.
					Lorem ipsum dolor sit amet, consec hendrerit mauris. Phasellus porta. <a href="#">[...]</a></p>
					</section>
				</article>
			</article>
		</section>
	</section>
	<section id="fondo-fixed">
		<h3>Our Expert</h3>
		<div class="ancho">
			<figure>
				<img src="img/jefe.jpg" alt="">
			</figure>
			<section id="expert">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nesciunt facilis asperiores eligendi. Doloribus rem id quos.<br> <span>Donald Peterson / mail@demolink.org</span></p>
			<hr id="linea-fondo">
			</section>
		</div>
	</section>
	<section id="foot-arriba">
		<section class="art-foot">
			<h3>Special Project</h3>
			<figure>
				<img src="img/specialpro1.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur et.</p>
			</figure>
		</section>
		<section class="art-foot">
			<h3>Featured Posts</h3>
			<p>September 17, 2014</p>
			<p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet.
			<p>September 12, 2014</p>
			<p>Fusce euismod consequat ante. Lorem ipsum dolor sit amet.</p>
		</section>
		<section class="art-foot">
			<h3>Latest Videos</h3>
			<p>September 21, 2014 by Zack Lopes<p>
			<p>Nulla venenatis. In pede mi, aliquet sit amet, euismod in</p>
			<p>September 19, 2014 by Inga North</p>
			<p>Fusce euismod consequat ante orem ipsum dolor sit amet, consectetu</p>
		</section>
		<section class="art-foot">
			<h3>Categories</h3>
			 <li>KITCHENS
			 <li>BATHROOMS</li>
			 <li>ADDITIONS</li>
			 <li>BASEMENTS</li>
			 <li>CONDOS & LOFTS</li>
			 <li>LIVING ROOMS</li>
			 <li>ENERGY RETROFITS</li>
		</section>
	</section>
	<footer>
		<section id="text-footer">
		<h4>WOOD HAMMER © 2018 All Rights Reserved | Privacy Policy</h4>
		</section>
		<section id="iconos-footer">
		<div class="redes-sociales">
			<i class="fab fa-facebook-f"></i>
		</div>
		<div class="redes-sociales">
			<i class="fab fa-instagram"></i>
		</div>
		<div class="redes-sociales">
			<i class="fab fa-pinterest-p"></i>
		</div>
		<div class="redes-sociales">
			<i class="fab fa-linkedin-in"></i>
		</div>
		<div class="redes-sociales">
			<i class="fab fa-twitter"></i>
		</div>
		</section>
	</footer>
		<script>

			// SCRIPT PARA EL BOTON SUBIR
			$(document).ready(function(){
    $('#flecharriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });
    });

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('#flecharriba').slideDown(300);
        } else {
            $('#flecharriba').slideUp(300);
        }
    });


		</script>

		<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>