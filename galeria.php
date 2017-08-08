<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="img/ico.jpg">
<!-- ÑÑÑÑ -->
<?PHP
if (isset($_GET["ver"])) {
	$ver = $_GET["ver"];}
else {
	$ver = 0;}

include ("variables.php");
$hot = 1;
// PAGINA DE INICIO INDEX
$index='index.php';
$color1=$color1[$hot];
$color2=$color2[$hot];
$color3=$color3[$hot];
$color4=$color4[$hot];
$color5=$color5[$hot];
?>

<title id="titulo"><?php echo $hotel[$hot]; ?></title>
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<style>

tbody tr:nth-child(even) {background-color: transparent !important;}

/**/
.negro {background-color: #292222; color: #fff; border: none !important;}
.amarillo{background-color: #f3c517; color: #000; border: none !important;}
.rojo{background-color: #9b1b20; color: #fff; border: none !important;}
.blanco{background-color: #fff; color: #000;}
.tamarillo{color: #f3c517;}
.tblanco{color: #fff;}
.tnegro{color: #000; z-index:10;}
.trojo{color: #9b1b20;}

.margensup {height:50px;}
#correo .button {
	background-color: #9b1b20 !important;
	color: #fff !important;
}
#correo .button:hover {
	background-color: #7b0b00 !important;
	color: #ff0 !important;
}
/*
.enviar1, .enviar3 {
	background-color: #000 !important;
	color: #fff !important;
}
.enviar1: hover, .enviar3: hover{
	background-color: #f0f !important;
	color: #f0f !important;
}
.enviar2{
	background-color: #000 !important;
	color: #f3c517 !important;
}
.enviar2: hover{
	background-color: #9b1b20 !important;
	color: #333 !important;
}
*/
.expande{width:100%; height: 4px;}
.centrar{text-align:center;}
.seleccionado{
	color: #f3c517;
	background-color: #000;
}
.noseleccionado{
	color: #000;
	background-color: #f3c517;
}

header{
	margin-top: -3.5em;
}
@media screen and (min-width: 500px){
	header {min-height: 100vh;}
}
	
@media handheld {
header{
	min-height: 40vh;
}
}

.vcentrar{
	margin-top:calc(40vh - 140px);
	text-align: center;
}
.button{
	background: #fff !important;/**/
	color: #000;
}
.menu a{color:#000;
background: #fff !important;
}
.button:hover{
	color: #f7c713 !important;
}
/*
form > .enviar{
	background-color: #f3c517 !important;
	color: #000 !important;
}
form > .enviar:hover{
	background-color: #fff !important;
	color: #f00 !important;
}
form > .enviar1{
	background-color: #000 !important;
	color: #f3c517 !important;
}
form > .enviar1:hover{
	background-color: #f00 !important;
	color: #fff !important;
}
*/
.selecc{
	color: #f7c713 !important;
	border-bottom-style: solid !important;
	border-bottom-color: #f7c713 !important;
	border-bottom-width: 5px !important;
}
.seleccno{
	color: #fff;
}
.transparente{background: transparent !important;}
.contenedor {
	//width: 100% !important;
	max-width: 1000px;
	margin:auto !important;
}
.fondo {
	width: 100% !important;
	min-height: 90vh;
}
.fondo1 {
	width: 100% !important;
}

.fondo2 {
	width: 100% !important;
	min-height: 100vh;
}


#flechitaHeader{
	color: white;
	text-align: center;
	padding-top: 30vh;
	text-shadow: 0px 1px 1px rgba(0, 0, 0, 1);
}
.margenTituloSmall{padding-top:3em;}
.fijo {
  position: fixed;
  bottom: 0;
  //right: 0;
  width: 100%;
  padding: 1rem;
}
</style>
<?php
$rutaFoundation='foundation-6/';

?>
<!-- Compressed CSS -->
<link rel="stylesheet" href="<?php echo $rutaFoundation;?>css/foundation.min.css">
<link rel="stylesheet" href="css/general_foundicons.css">
<link rel="stylesheet" href="css/social_foundicons.css">
<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/app.css">

<link rel="stylesheet" href="estilos1.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="main.js"></script>
<!--
<script src="js/blur.js"></script>
-->


</head>
<body>

<header class="show-for-small-only" style="min-heigt:60vh !important;">
	<nav class="menu" id="menu"></nav>
</header>

<a name="slide"></a>
<div class="fondo <?php echo $color2; ?>">
<div class="contenedor">
<div class="show-for-small-only margenTituloSmall">&nbsp;</div>
<!-- GALERIA -->

<div class="row <?php echo $color2; ?>">
<div class="large-12 columns">
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl/owl-carousel/owl.carousel.css">
<!-- Default Theme -->
<link rel="stylesheet" href="owl/owl-carousel/owl.theme.css">


<!-- Include js plugin -->
<script src="owl/owl-carousel/owl.carousel.js"></script>


  
  <style type="text/css">
body {
	background-color: #000;
	width: 100%;
	height: 100%;	
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	margin: 0;
	padding: 0;
	border: 0;
}
.marco1{
	width: 100%;
	height: 253px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
.marco2{
	width: 334px;
	height: 273px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
.marco2-1{
	width: 324px;
	height: 285px;
	margin: 0 auto;
	//background-color: #fff;
	//padding: 5px;
	}
.marco2-2{ //marco de la imagen
	width: 324px;
	height: 253px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
	
.marco3{
	width: 324px;
	height: 63px;
	margin: 0 auto;
	background-color: #fff;
	padding: 5px;
	}
.marconav{
	//width: 120px;
	//margin-left: 10px;
	//margin-right: 5px;
	background-color: #fff;
		padding: 2px;
	
}
.marconav1{

	background-color: transparent
		padding: 2px;
	
}
.centrar{text-align:center;
}

</style>

<!-- <div class="row">
	<div class="twelve column" >-->
	<!--<br class="margensup"/><br class="margensup"/>-->
	<h1 class="centrar"><?php echo $lugar[$ver];?></h1>
		<div id="sync1" class="owl-carousel">
		<!-- slide grande -->
		<?php
			for ($i=0; $i < count(($foto[$ver])); $i++){
				echo '<div class="item"><span class="show-for-medium"><img class="thumbnail" src="'.$urlfotos.$foto[$ver][$i].'"><br />'.$text[$ver][$i].'</span><span class="show-for-small-only"><img class="thumbnail"  src="'.$urlcelu.$foto[$ver][$i].'"><br />'.$text[$ver][$i].'</span></div>';
				/*<br />'.$i.'-'.$text[$ver][$i].''*/
			}
		?>
		</div>
		<!-- slide menu -->
		<div id="sync2" class="owl-carousel">
			<?php
				for ($i=0; $i < count($foto[$ver]); $i++){
					echo '<div class="item"><span class="show-for-medium"><img src="'.$urlthumb.$foto[$ver][$i].'"></span><span class="show-for-small-only"><img src="'.$urlthumb.$foto[$ver][$i].'"></span></div>';
				}
			?>
		</div>
<!--	</div>
</div>-->

<style>
#sync1 .item{
	background: transparent; //transparent #077;
	padding: 0px 0px;
	margin: 0px;
	color: #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
}
#sync2 .item{
	background: #C9C9C9;
	padding: 10px 0px;
	margin: 5px;
	color: #FFF;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	text-align: center;
	cursor: pointer;
}
#sync2 .item h1{
  font-size: 18px;
}
#sync2 .synced .item{
  background: #f3c517;
}
</style>

<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");

  sync1.owlCarousel({
	singleItem : true,
	slideSpeed : 1000,
	navigation: false,
	
	//navigationText : ["anterior","siguiente"],
	rewindNav : true,
	
	pagination:false,
	afterAction : syncPosition,
	responsiveRefreshRate : 200,

	

  });

  sync2.owlCarousel({
	items : 15,
	itemsDesktop      : [1199,10],
	itemsDesktopSmall     : [979,10],
	itemsTablet       : [768,8],
	itemsMobile       : [479,4],
	pagination:true,
	responsiveRefreshRate : 100,
	afterInit : function(el){
	  el.find(".owl-item").eq(0).addClass("synced");
	}
  });

  function syncPosition(el){
	var current = this.currentItem;
	$("#sync2")
	  .find(".owl-item")
	  .removeClass("synced")
	  .eq(current)
	  .addClass("synced")
	if($("#sync2").data("owlCarousel") !== undefined){
	  center(current)
	}

  }

  $("#sync2").on("click", ".owl-item", function(e){
	e.preventDefault();
	var number = $(this).data("owlItem");
	sync1.trigger("owl.goTo",number);
  });

  function center(number){
	var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

	var num = number;
	var found = false;
	for(var i in sync2visible){
	  if(num === sync2visible[i]){
		var found = true;
	  }
	}

	if(found===false){
	  if(num>sync2visible[sync2visible.length-1]){
		sync2.trigger("owl.goTo", num - sync2visible.length+2)
	  }else{
		if(num - 1 === -1){
		  num = 0;
		}
		sync2.trigger("owl.goTo", num);
	  }
	} else if(num === sync2visible[sync2visible.length-1]){
	  sync2.trigger("owl.goTo", sync2visible[1])
	} else if(num === sync2visible[0]){
	  sync2.trigger("owl.goTo", num-1)
	}
  }

});
</script>

<script>
$(document).ready(function() {
 
  $("#owl-example").owlCarousel();
 
});
</script>

<br class="margensup"/><br class="margensup"/>
</div>

</div>
</div>
</div>




</body>


<!-- Compressed JavaScript -->
<script src="<?php echo $rutaFoundation;?>js/foundation.min.js"></script>
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