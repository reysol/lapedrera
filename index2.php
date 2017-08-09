<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
include ("variables.php");
// PAGINA DE INICIO INDEX
$index='index1.php';
?>
<link rel="shortcut icon" href="<?php echo $icono; ?>">



<title id="titulo"><?php echo $hotel; ?></title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<style>
#cabecera{
	margin-top: -1.5em;

	background: url("<?php echo $fondo; ?>")  no-repeat center center fixed !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
}
</style>

<?php
$rutaFoundation='foundation/';

?>

<!-- Compressed CSS -->
<link rel="stylesheet" href="<?php echo $rutaFoundation;?>css/foundation.min.css">
<link rel="stylesheet" href="css/general_foundicons.css">
<link rel="stylesheet" href="css/social_foundicons.css">
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/app.css">

<link rel="stylesheet" href="estilos1.css">

<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="css1.css">
</head>
<body>



<script>
$(function() {
  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 30) {
      $("body").addClass("sticky-shrinknav-wrapper");
    } else{
      $("body").removeClass("sticky-shrinknav-wrapper");
    }
  });
});


</script>
<style>
.menu1 {
	bacground-color: #fff !important;
	padding: 5px;
}
</style>
<header class="sticky-shrinknav-header">
  <ul class="dropdown menu" data-dropdown-menu>
  <li>
    <!--<span class="menu1 fblanco"><i class="fa fa-bars"></i></span>
	<span class="tblanco"><i class="fa fa-bars fa-3x fa-border" aria-hidden="false"></i></span>-->
	<a class="btn btn-danger" href="#">
  <i class="fa fa-bars fa-3x"></i></a>
    <ul class="menu">
      <li><a href="#inicio">Inicio</a></li>
	  <li><a href="#historia">Historia</a></li>
	  <li><a href="#servicios">Servicios</a></li>
	  <li><a href="#slide">Galer&iacute;a</a></li>
	  <li><a href="#ubicacion">Ubicaci&oacute;n</a></li>
	  <li><a href="#consulta">Consulta</a></li>
	  <li><a href=""https://www.facebook.com/""><i class="socialicon-facebook"></i></a></li>
    </ul>
  </li>
 </ul>
</header>
<a name="inicio"></a>
<div ID="cabecera">
	<div class="contenedor">
		<div class="logo">
			<!-- CABECERA -->
			<div class="row">
				<div class="large-12 columns vcentrar">
					<!--<p align="center"></p>-->
					<img src="<?php echo $logo; ?>" class="logoLP">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- DESCRIPCIÓN GENERAL LA PEDRERA -->
<a name="historia"></a>
<div class="fondo fblanco tazul">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- CUERPO -->


<div class="row">
<div class="small-12 columns <?php echo $blancof; ?> <?php echo $azult; ?>">
	<div class="row">
	<div class="small-9  small-centered columns">
<!--<br class="margensup"/><br class="margensup"/>-->
		<div class="row">
			<div class="small-6 columns large-centered"><h1 class="text-center tbordo"><strong>LA PEDRERA</strong></h1></div>
		</div>
		<div class="row"">
			<div class="small-6 columns large-centered" style="top:-100px"><img src="img/ornamentoTitulos-01.png" class="float-center" style="margin-top:-30px"></div>
	</div>
	</div>
</div>
<br />
<!-- textos en 2 columnas -->
<div class="row medium-unstack">
	<div class="medium-6 columns">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div class="medium-6 columns">
		elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br />
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa Duis aute irure dolor in reprehenderit in qui officia deserunt mollit anim id est laborum.
	</div>

</div></div>

</div>

</div>

<!-- SERVICIOS -->
<a name="servicios"></a>
<div class="fondo fbeige">
<div class="contenedor">
<!-- <div class="show-for-small-only margenTituloSmall">&nbsp;</div> -->
<!-- CUERPO -->

<div class="row">
	<div class="medium-12 small-6 columns fbeige">
		<h1 class="centrar tbordo"><strong>SERVICIOS</strong></h1>
	</div>
</div>
<br />
<!-- servicios en tabla -->

	

				<?php
					for ($i=0; $i < count($servicios); $i+=4){
						echo '<div class="row">';
						for ($j=0; $j<4; $j++){
							if (isset($servicios[$i+$j])) {
								echo '
								<div class="small-1 columns tblanco">
									<br /><i class="fa '.$servicios[$i+$j][2].' fa-3x"></i>
								</div>
								<div class="small-2 columns tazul">
									<div class="row">
										<div class="small-12 columns">
											<br />'.$servicios[$i+$j][0].'
										</div>
										<div class="small-12 columns">
											<small>'.$servicios[$i+$j][1].'</small>
										</div>
									</div>
								</div>';
							}
						}
						echo '</div>';
					}
				?>
</div>
</div>


<!-- GALERIA -->
<a name="slide"></a>
<div class="fondo fblanco">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>


<div class="row fblanco">
<div class="large-12 columns">

<!--
<div class="row">
<div class="large-12 columns" >
-->
	<!--<br class="margensup"/><br class="margensup"/>-->
	<h1 class="centrar">GALERÍA DE FOTOS</h1>
	<div>
	<?php
		
		for ($x=0;$x<3;$x++){//tres filas de galeria
			echo '<div class="row" >';
			for ($y=0;$y<3;$y++){//tres lugares x fila
				echo '<div class="large-4 medium-4 columns"><a href="galeria.php?ver='.$lg[$x][$y].'" target="_blank"><img src="'.$urlfotos.$foto[$lg[$x][$y]][0].'" class="foto"><span class="foto-2">'.$lugar[$lg[$x][$y]].'</span></a></div>';
			}
			echo '</div>';	
		}
		?>
	</div>
<br class="margensup"/><br class="margensup"/>
<!--
</div>
</div>
-->
</div>
</div>
</div></div>

<!-- UBICACION -->
<a name="ubicacion"></a>
<div class="fondo fbeige">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>


<div class="row fbeige">
<div class="large-12 columns centrar">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1>UBICACI&Oacute;N</h1> </br>
<div class="flex-video widescreen">
<iframe src="<?php echo $mapa;?>" width="1000" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h6 class="centrar" style="padding-top: 2em; padding-bottom: 3em"> <?php echo $direccion;?> - Villa Carlos Paz<br />Coordenadas GPS Latitud:<?php echo $coordenadax;?> Longuitud: <?php echo $coordenaday;?></h6>
</div>

</div>
</div>
</div>

<!-- CONSULTA -->
<a name="consulta"></a>
<div class="fondo2 fblanco">
<div class="contenedor1">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>


<div class="row fblanco">
<div class="small-12 medium-9 columns small-centered centrar">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1>CONSULTA</h1><h5>Ante cualquier inquietud, complete el formulario de consulta, o<br /> comun&iacute;quese al <?php echo $telefono;?> o al (0351)15 245 5770</h5>

</div>
</div>
<div class="row fblanco">
<div class="small-12 medium-6 columns small-centered medium-centered" id="correo">
<!--<form method="post" action="enviar.php"></form>-->

<label class="tbordo"><strong>Nombre y Apellido</strong><input type="text" id="nombre"></label>
<label class="tbordo"><strong>Direcci&oacute;n de e-mail</strong><input type="email" id="email"></label>
<label class="tbordo"><strong>Tel&eacute;fono</strong><input type="tel" id="telefono"></label>
<label class="tbordo"><strong>Asunto</strong><input type="text" id="asunto"></label>
<label class="tbordo"><strong>Mensaje</strong><textarea id="mensaje"></textarea></label>

<!--<input type="submit" class="button float-right " value="Enviar">-->
<div id='contenido'class="column small-7 medium8 float-left"> </div><input type="submit" class="button float-right " href="javascript:;" onclick="realizaProceso($('#nombre').val(), $('#email').val(), $('#asunto').val(), $('#mensaje').val(), $('#telefono').val());return false;" value="Enviar"/>


    



</div>
</div>
</div><!-- FIN CONTENEDOR 2 -->
</div>
<!-- pie -->
<a name="pie"></a>

<div class="fondo3 fbordo">
<div class="contenedor2">




<div class="row frojo" >

  <div class="large-2 columns fbordo">
    <img src="img/logoBlanco-01-1.png">
  </div>
  <div class="large-8 columns frojo tblanco tcvh padre">
    <span class="hijo">Toquio 302 esq. Laprida - Villa Carlos Paz<br />
	Tel: +54 3541 237509<br />
	lapedreraboutique@gmail.com</span>
  </div>
  <div class="large-2 columns fbordo tcvh padre">
    <span class="hijo"><img src="img/redes.jpg"></span>
  </div>
</div>
<div class="row frojo" >

  <div class="large-3 columns fbordo tblanco"><small>&nbsp;</small>
  </div>
  <div class="large-6 columns fbordo tblanco tch">
    <h6 class=""><small>2017 - La Pedrera Boutique - Todos los derechos reservados</small></h6>
  </div>
  <div class="large-3 columns fbordo tblanco tch padre">
    <h6 class="hijo"><img src="img/isologo-4.png"><small>&nbsp;BusinessInside - Diseño Web</small></h6>
  </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>


<script>
      $(document).foundation();
</script>
<script src="main.js"></script>

</body>
<script>
function realizaProceso(valorCaja1, valorCaja2, valorCaja3, valorCaja4, valorCaja5){
        var parametros = {
                "nombre" : valorCaja1,
                "email" : valorCaja2,
				"asunto" : valorCaja3,
				"mensaje" : valorCaja4,
				"hot" : valorCaja5
        };
        $.ajax({
                data:  parametros,
                url:   'enviar2.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenido").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenido").html(response);
                }
        });
}
</script>
<script type='text/javascript'>
    // Funcion para cargar un contenido en un div
    function cargarContenido(pagina)
    {
		$("#contenido").html("Enviando . . .");
        // cargamos la pagina pagina.html en el div contenido
        $("#contenido").load(pagina);
    }
    // Funcion para cargar un contenido en un div mostrando un reloj de arena

    </script>
	

<!-- Compressed JavaScript -->





<!--
<script src="<?php echo $rutaFoundation;?>js/foundation.sticky.js"></script>
<script src="<?php echo $rutaFoundation;?>js/foundation.core.js"></script>
-->

<script>
function menu(){
	var id = '#m';
    $(id).css('height', $($(id).children()[0]).css('height'));
	//var id1 = '#ms';
    //$(id1).css('height', $($(id1).children()[1]).css('height'));
}
$(document).ready(menu)

</script>

</html>