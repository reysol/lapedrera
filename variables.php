<?php
$hotel='La Pedrera Boutique';
$logo='img/logoConFondo-01.png';
$icono='img/ico.jpg';
$fondo='img/0014.jpg';
//colores
$blancof='fblanco';
$blancot='tblanco';
$beigef='fbeige';
$beiget='tbeige';
$amarillof='famarillo';
$amarillot='tamarillo';
$bordof='fbordo';
$bordot='tbordo';
$azulf='fazul';
$azult='tazul';

//VARIABLES DE LA GALERIA DE IMAGENES
//directorios de fotos

$urlfotos='img/fotos/';//fotos de la galería
$urlthumb='img/thumb/';//fotos de la galería thumbnail
$urlcelu='img/celu/';//fotos de la galería para celular
//orden de las dependencias
//0 General La Pedrera, 1 Florida, 2 Paris, 3 Tokio, 4 Pinky, 5 Fort, 6 Barcelona, 7 Alexia, 8 Guatemala
$lg[0]=array(1,2,3);
$lg[1]=array(4,0,5);
$lg[2]=array(6,7,8);

//LA PEDRERA
$lugar[0]="LA PEDRERA";
$foto[0]=array("0001.jpg","0002.jpg","0003.jpg","0005.jpg","0006.jpg","0009pan.jpg","0010.jpg","0011.jpg","0012.jpg","0013.jpg","0014.jpg","0015.jpg","0016.jpg","0017.jpg","0018.jpg","0019.jpg","0021.jpg","0022.jpg","0023.jpg","0024.jpg","0025.jpg","0026.jpg","0027.jpg","0028.jpg","0097.jpg");
$text[0]=array("0001.jpg","0002.jpg","0003.jpg","0005.jpg","0006.jpg","0009pan.jpg","0010.jpg","0011.jpg","0012.jpg","0013.jpg","0014.jpg","0015.jpg","0016.jpg","0017.jpg","0018.jpg","0019.jpg","0021.jpg","0022.jpg","0023.jpg","0024.jpg","0025.jpg","0026.jpg","0027.jpg","0028.jpg","0097.jpg");
//FLORIDA
$lugar[1]="FLORIDA";
$foto[1]=array("1029.jpg","1030.jpg","1031.jpg","1032.jpg","1033.jpg","1034.jpg");
$text[1]=array("1029.jpg","1030.jpg","1031.jpg","1032.jpg","1033.jpg","1034.jpg");
//PARIS
$lugar[2]="PARIS";
$foto[2]=array("2048.jpg","2049.jpg","2050.jpg","2051.jpg","2052.jpg","2053.jpg","2055.jpg","2057.jpg");
$text[2]=array("2048.jpg","2049.jpg","2050.jpg","2051.jpg","2052.jpg","2053.jpg","2055.jpg","2057.jpg");
//TOKIO
$lugar[3]="TOKIO";
$foto[3]=array("3082.jpg","3083.jpg","3084.jpg","3086.jpg","3087.jpg");
$text[3]=array("3082.jpg","3083.jpg","3084.jpg","3086.jpg","3087.jpg");
//PINKY
$lugar[4]="PINKY";
$foto[4]=array("4073.jpg","4075.jpg","4076.jpg","4077.jpg");
$text[4]=array("4073.jpg","4075.jpg","4076.jpg","4077.jpg");
//FORT
$lugar[5]="FORT";
$foto[5]=array("5058.jpg","5059.jpg","5060.jpg","5061.jpg","5062.jpg","5063.jpg","5065.jpg");
$text[5]=array("5058.jpg","5059.jpg","5060.jpg","5061.jpg","5062.jpg","5063.jpg","5065.jpg");
//BARCELONA
$lugar[6]="BARCELONA";
$foto[6]=array("6090.jpg","6092.jpg","6093.jpg","6096.jpg");
$text[6]=array("6090.jpg","6092.jpg","6093.jpg","6096.jpg");
//ALEXIA
$lugar[7]="ALEXIA";
$foto[7]=array("7035.jpg","7036.jpg","7038.jpg","7039.jpg","7040.jpg","7041.jpg");
$text[7]=array("7035.jpg","7036.jpg","7038.jpg","7039.jpg","7040.jpg","7041.jpg");
//GUATEMALA
$lugar[8]="GUATEMALA";
$foto[8]=array("8042.jpg","8043.jpg","8044.jpg","8046.jpg","8047.jpg");
$text[8]=array("8042.jpg","8043.jpg","8044.jpg","8046.jpg","8047.jpg");

$mapa='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13620.729376843401!2d-64.48082238435741!3d-31.409101827985314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5cca22fb938bbcb!2sLa+Pedrera+posada!5e0!3m2!1ses-419!2sar!4v1502062266640';
$direccion='Laprida esquina Tokio';
$coordenadax='-31.4154127';
$coordenaday='-64.5094572';
$telefono='(03541) 42 9453';
$servicios = array(
		array('Desayuno','Tipo Buffet','fa-coffee'),
		array('Restaurante','Media pensión','fa-cutlery'),
		array('WiFi','Gratuito','fa-wifi'),
		array('Piscina','Al aire libre','fa-life-saver'),
		array('Parking','Privado','fa-automobile'),
		array('Television','Por cable','fa-desktop'),
		array('Hidromasajes','Con Jets','fa-tag'),
		array('Ventilador de Techo','','fa-remove fa-spin'),
		array('Calefactor','','fa-fire'),
		array('Ropa de Cama','y toallas','fa-bed'),
		array('Bella Vista','al Lago','fa-picture-o'),
		array('Centro de Fitnes','Aparatos','fa-bicycle'),
		array('Mascotas','Pequeñas','fa-paw'),
		array('Minibar','','fa-glass'),
		array('Asador','con carbón y leña','fa-fire'),

	);
/*$serv[1]=array(	array('Desayuno','fa-coffee'),
				array('Cena','fa-cutlery'),
				array('WiFi en todo el Hotel','fa-wifi'),
				array('Piscina climatizada','fa-life-saver'),
				array('Cochera','fa-automobile'),
				array('Television por cable en todas las habitaciones','fa-desktop'),
				array('Baño privado','fa-tag'),
				array('Ventilador de Techo','fa-modx'),
				array('Calefactor','fa-fire')
			);*/

$color1[2]='negro';
$color2[2]='amarillo';
$color3[2]='tamarillo';
$color4[2]='enviar2';
$color5[2]='tnegro';


$color1[3]='rojo';
$color2[3]='blanco';
$color3[3]='tblanco';
$color4[3]='enviar3';
$color5[3]='tnegro';
