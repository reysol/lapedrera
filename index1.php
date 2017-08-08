<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="img/ico.jpg">
<!-- ÑÑÑÑ -->
<?PHP
if (isset($_GET["hot"])) {
	$hot = $_GET["hot"];}
else {
	$hot = 1;}
include ("variables.php");
// PAGINA DE INICIO INDEX
$index='index.php';
$color1=$color1[$hot];
$color2=$color2[$hot];
$color3=$color3[$hot];
$color4=$color4[$hot];
$color5=$color5[$hot];
$color6=$color6[$hot];
?>

<title id="titulo"><?php echo $hotel[$hot]; ?></title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<style>
#cabecera{
	margin-top: -1.5em;
//
	background: url(<?php echo $fondo[$hot]; ?>)  no-repeat center center fixed !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
}
</style>
<link rel="stylesheet" href="css1.css">
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

<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

</head>
<body>
<style>
$sticky-shrinknav-menu-height: rem-calc(60);
$sticky-shrinknav-hero-height: 300px;


body {
  padding-top: $sticky-shrinknav-hero-height + 0px;
}

.sticky-shrinknav-menu {
  @include horizontal-center;
  bottom: 0;
  height: $sticky-shrinknav-menu-height;
  line-height: $sticky-shrinknav-menu-height;
  width: 100%;
  background-color: rgba($primary-color, 0.1);
  transition: all 0.5s ease;

  li {
    border-radius: 2px;
    transition: all 0.3s ease;

    &:hover {
      box-shadow: 0 0 0 1px $white;
    }
  }

  a {
    color: $white;
  }
}

.sticky-shrinknav-header-title {
  transition: all 0.3s ease;
  position: relative;
  transform: translateY(-$sticky-shrinknav-menu-height/2);
  margin-bottom: 0;
  color: $white;
}

.sticky-shrinknav-header {
  //width: 100%;
  height: $sticky-shrinknav-hero-height;
  display: flex;
  align-items: baseline;
  justify-content: center;
  background-color: lighten($primary-color, 10%);
  //text-align: center;
  position: fixed;
  top: initial;
  left: 0;
  overflow: visible;
  transition: all 0.5s ease;
}

body.sticky-shrinknav-wrapper {
  padding-top: 130px;

  .sticky-shrinknav-header{
    height: $sticky-shrinknav-menu-height;
    background-color: rgba($primary-color, 0.9);

    .sticky-shrinknav-header-title{
      transform: scale(0);
      transition: all 0.3s ease;
    }
  }
}


</style>
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
<header class="sticky-shrinknav-header">
  <ul class="dropdown menu" data-dropdown-menu>
  <li>
    <a href="#">MENÚ</a>
    <ul class="menu">
      <li><a href="#inicio">Inicio</a></li>
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
<div ID="cabecera"><!-- class="show-for-medium">-->
<!--NUEVO MENU-->



<!--/NUEVO MENU-->
	
	
	<div class="contenedor">
		<div class="logo">
			<!-- CABECERA -->
			<div class="row">
				<div class="large-12 columns vcentrar">
					<!--<p align="center"></p>-->
					<?php
					echo '<img src="img/'.$logo[$hot].'" class="logoLP">';
					?>
					
				</div>
			</div>
			<div id="flechitaHeader" class="show-for-medium">
					<h5>Bienvenido!</h5>
					<a href="#servicios" class="tblanco"><i class="fa fa-chevron-down fa-2x"></i></a>
				</div>
		</div>
	</div>
</div>

<!-- SERVICIOS -->
<a name="servicios"></a>
<div class="fondo <?php echo $color6; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- CUERPO -->


<div class="row">
<div class="small-12 columns <?php echo $color6; ?>">
<div class="row"><div class="small-9  small-centered columns">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1 class="centrar">SERVICIOS</h1>
<h5 class="centrar">El hotel ofrece los siguientes servicios para que su estadía en nuestra casa sea de su agrado</h5>
</div></div>
<br />
<!-- servicios en tabla -->
<div class="row medium-unstack">
	<div class="medium-6 columns">
		<table class="tablaservicios">
			<tbody class="<?php echo $color6; ?>">
				<tr>
					<th>
						<h4>En el hotel</h4>
					</th>
				</tr>
				<?php
					for ($i=0; $i < count(($serv[$hot]['general'])); $i++){
						echo '<tr><td class="<?php echo $color1; ?>"><i class="fa '.$serv[$hot]['general'][$i][1].' fa-3x '.$color3.'"></i></td>'.
						'<td>'.$serv[$hot]['general'][$i][0].'</td></tr>';
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="medium-6 columns">
		<table class="tablaservicios">
			<tbody class="<?php echo $color6; ?>">
				<tr>
					<th>
						<h4>Habitaciones</h4>
					</th>
				</tr>
				<?php
					for ($i=0; $i < count(($serv[$hot]['habitaciones'])); $i++){
						echo '<tr><td class="<?php echo $color1; ?>"><i class="fa '.$serv[$hot]['habitaciones'][$i][1].' fa-3x '.$color3.'"></i></td>'.
						'<td>'.$serv[$hot]['habitaciones'][$i][0].'</td></tr>';
					}
				?>
			</tbody>
		</table>
	</div>

</div></div>

</div>

</div>
</div>
<!-- GALERIA -->
<a name="slide"></a>
<div class="fondo <?php echo $color1; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>


<div class="row <?php echo $color1; ?>">
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
<div class="fondo <?php echo $color6; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>


<div class="row <?php echo $color6; ?>">
<div class="large-12 columns centrar">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1>UBICACI&Oacute;N</h1> </br>
<div class="flex-video widescreen">
<iframe src="<?php echo $mapa[$hot];?>" width="1000" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h6 class="centrar" style="padding-top: 2em; padding-bottom: 3em"> <?php echo $direccion[$hot];?> - Villa Carlos Paz<br />Coordenadas GPS Latitud:<?php echo $coordenadax[$hot];?> Longuitud: <?php echo $coordenaday[$hot];?></h6>
</div>

</div>
</div>
</div>

<!-- CONSULTA -->
<a name="consulta"></a>
<div class="fondo2 <?php echo $color1; ?>">
<div class="contenedor1">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>


<div class="row <?php echo $color1; ?>">
<div class="small-12 medium-9 columns small-centered centrar">
<!--<br class="margensup"/><br class="margensup"/>-->
<h1>CONSULTA</h1><h5>Ante cualquier inquietud, complete el formulario de consulta, o<br /> comun&iacute;quese al <?php echo $telefono[$hot];?> o al (0351)15 245 5770</h5>

</div>
</div>
<div class="row <?php echo $color1; ?>">
<div class="small-12 medium-6 columns small-centered medium-centered" id="correo">
<!--<form method="post" action="enviar.php"></form>-->

<label class="<?php echo $color5; ?>">Nombre y Apellido<input type="text" id="nombre"></label>
<label class="<?php echo $color5; ?>">Direcci&oacute;n de e-mail<input type="email" id="email"></label>
<label class="<?php echo $color5; ?>">Asunto<input type="text" id="asunto"></label>
<label class="<?php echo $color5; ?>">Mensaje<textarea id="mensaje"></textarea></label>
<input type="hidden" id="hot" value="<?php echo $hot; ?>">
<!--<input type="submit" class="button float-right " value="Enviar">-->
<div id='contenido'class="column small-7 medium8 float-left"> </div><input type="submit" class="button float-right " href="javascript:;" onclick="realizaProceso($('#nombre').val(), $('#email').val(), $('#asunto').val(), $('#mensaje').val(), $('#hot').val());return false;" value="Enviar"/>


    



</div>
</div>
</div><!-- FIN CONTENEDOR 2 -->
</div>
<!-- pie -->
<a name="pie"></a>

<div class="fondo3 <?php echo $color2; ?>">
<div class="contenedor2">




<div class="row <?php echo $color2; ?>" >

  <div class="large-2 columns <?php echo $color2; ?>">
    <img src="img/logochico.jpg">
  </div>
  <div class="large-8 columns <?php echo $color2; ?> <?php echo $color5; ?> tcvh padre">
    <span class="hijo">Toquio 302 esq. Laprida - Villa Carlos Paz<br />
	Tel: +54 3541 237509<br />
	lapedreraboutique@gmail.com</span>
  </div>
  <div class="large-2 columns <?php echo $color2; ?> tcvh padre">
    <span class="hijo"><img src="img/redes.jpg"></span>
  </div>
</div>
<div class="row <?php echo $color2; ?>" >

  <div class="large-3 columns <?php echo $color2; ?> <?php echo $color5; ?>"><small>&nbsp;</small>
  </div>
  <div class="large-6 columns <?php echo $color2; ?> <?php echo $color5; ?> tch">
    <h6 class=""><small>2017 - La Pedrera Boutique - Todos los derechos reservados</small></h6>
  </div>
  <div class="large-3 columns <?php echo $color2; ?> <?php echo $color5; ?> tch padre">
    <h6 class="hijo"><small>BusinessInside - Diseño Web</small></h6>
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