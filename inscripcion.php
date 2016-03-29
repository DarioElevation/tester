<?php
	error_reporting(E_ERROR);
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Orixgen</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<link  href="style/responsive.css" rel="stylesheet" type="text/css" media="all" />
<!-- Fancybox -->
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="shortcut icon" href="imagenes/icono.ico">
<link rel="stylesheet" type="text/css" href="style/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="scripts/funciones.js"></script>
<!-- Fancybox -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-58036380-1', 'auto');
ga('send', 'pageview');

var myWidth;
var myHeight;
var left_slide;
$( document ).ready(function() 
	{

		$("html").on("swipeleft",function(){
		  alert("You swiped left!");
		});
		var myWidth = 0, myHeight = 0;
		if( typeof( window.innerWidth ) == 'number' ) {
		//Non-IE
		myWidth = window.innerWidth;
		myHeight = window.innerHeight;
		} else if( document.documentElement &&
		( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
		//IE 6+ in 'standards compliant mode'
		myWidth = document.documentElement.clientWidth;
		myHeight = document.documentElement.clientHeight;
		} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
		//IE 4 compatible
		myWidth = document.body.clientWidth;
		myHeight = document.body.clientHeight;
		}
		/*
		setTimeout ( function(){ 
		var top = $("#titulo_slide_qs1").offset().top;
		var left = $("#titulo_slide_qs1").offset().left;
		var plt = parseInt($("#slide_qs1").css("padding-left"));
		var wt = parseInt($("#titulo_slide_qs1").css("width"));
		left_slide = $("#contenido_quienessomos").css("margin-left");
		var mlt= parseInt($("#content-slider").css("margin-left"));
		top_slide = -top;

		$("#nextslide_qs").css("top", top+5);
		$("#nextslide_qs").css("left", (mlt+wt+plt));
		$("#nextslide_qs").animate({opacity:1}, 500, 'swing', function(){}); 
		}, 500); 
		var w_slide=parseInt($("#slide_qs1").css("height"));	
		w_slide+=parseInt($("#slide_qs1").css("padding-top"));
		w_slide+=parseInt($("#slide_qs1").css("margin-top"));
		w_slide+=parseInt($("#slide_qs1").css("padding-bottom"));
		$("#mision").css("top", w_slide+30);
		w_slide+=parseInt($("#content-slider").css("height"));
		$("#content-slider").css("height",w_slide);
		*/
	});


$( window ).resize(function() {
	var w_slide=0;
  	w_slide=parseInt($("#slide_qs1").css("height"));
	w_slide+=parseInt($("#slide_qs1").css("margin-top"));	
	w_slide+=parseInt($("#slide_qs1").css("padding-top"));
	w_slide+=parseInt($("#slide_qs1").css("padding-bottom"));
	w_slide-=parseInt($("#content-slider").css("height"));
	$("#content-slider").css("height",w_slide);
	left_slide = $("#contenido_quienessomos").css("margin-left");

	setTimeout ( function(){ 
		var top = $("#titulo_slide_qs1").offset().top;
		plt = parseInt($("#slide_qs1").css("padding-left"));
		wt = parseInt($("#titulo_slide_qs1").css("width"));
		mlt= parseInt($("#content-slider").css("margin-left"));
		top_slide = -top;

		$("#nextslide_qs").css("top", top+5);
		$("#nextslide_qs").css("left", (mlt+wt+plt));
		}, 50); 
});

var slide_qs = 1;
var trans_slide = 0;
function NextSlide()
	{
		if(trans_slide==0)
			{
				
				if(slide_qs<3)
					{
						trans_slide = 1;
						$("#slide_qs"+slide_qs).animate({left:'-200%'}, 400, 'swing', function(){

							$("#slide_qs"+slide_qs).show();
						});
						slide_qs++;
						$("#slide_qs"+slide_qs).show(100,function() {
							$("#slide_qs"+slide_qs).animate({left:left_slide}, 400, 'swing', function()
							{
								/*$("#nextslide_qs").animate({opacity:0}, 500, 'swing', function(){
									$("#img_nextslide_qs").attr("src", "imagenes/next_qs.png");
									$("#nextslide_qs").animate({opacity:1}, 500, 'swing', function(){
									}); 
								}); */

								if(slide_qs==3)
								{
									$("#nextslide_qs").animate({opacity:0}, 200, 'swing', function(){
									$("#img_nextslide_qs").attr("src", "imagenes/next_qs_back.png");
									$("#nextslide_qs").animate({opacity:1}, 200, 'swing', function(){
									}); 
									}); 
								}

										trans_slide = 0;
							}); 
						});

						
					}
				else
					{
						//alert(slide_qs);
						$("#slide_qs"+slide_qs).animate({left:'200%'}, 1000, 'swing', function(){
							$("#slide_qs"+slide_qs).show();
						});
						$("#slide_qs2").animate({left:'200%'}, 1000, 'swing', function()
						{
							$("#slide_qs2").show();
						});
						$("#slide_qs1").show(function() {
						$("#slide_qs1").animate({left:left_slide}, 1000, 'swing', function()
						{
							$("#nextslide_qs").animate({opacity:0}, 200, 'swing', function(){
								$("#img_nextslide_qs").attr("src", "imagenes/next_qs.png");
								$("#nextslide_qs").animate({opacity:1}, 200, 'swing', function(){
									trans_slide = 0;
								}); 
							}); 
							$("#slide_qs2").css("display","none");
							$("#slide_qs3").css("display","none");
						});
						});
						slide_qs = 1;


					}
			}
	}

</script>
</head>

<body>
<?php
		$_SESSION['option_active'] = 7;
		include('configuracion/control.php');
		include('includes/encabezado.php');
?>
<div id="div_contenido_quienessomos">
<div id="contenido_quienessomos">
    <div class="cien izquierda" id="content-slider">
    	<div class="kit-inscripcion">
        	<img src="imagenes/kit-de-inscripcion-basico.jpg" border="0">
            <p class="titulo_inscripcion cien izquierda" style="margin-bottom:15px;">
                Kit de Inscripción Básico
            </p>
            <p class="texto_quienessomos qs2 center">
			</p>
            <p class="texto_quienessomos qs2" style="margin-bottom:0px;">
            	Contiene:
			</p>
            <ul class="list_inscripcion">
            	<li>
                	Bolsa Orixgen
                </li>
                <li>
                	Papelería
                </li>
                <li>
                	Sticker Orixgen
                </li>
                <li>
                	1 Fajilla de 20 Sachets
                </li>
            </ul>
        </div><div class="kit-inscripcion">
        	<img src="imagenes/kit-de-inscripcion-esencial.jpg" border="0">
            <p class="titulo_inscripcion cien izquierda" style="margin-bottom:15px;">
                Kit de Inscripción Esencial
            </p>
            <p class="texto_quienessomos qs2" style="margin-bottom:0px;">
            	Contiene:
			</p>
            <ul class="list_inscripcion">
            	<li>
                	Bolsa Orixgen
                </li>
                <li>
                	Papelería
                </li>
                <li>
                	Sticker Orixgen
                </li>
                <li>
                	1 Fajilla de 20 Sachets
                </li>
                <li>
                	2 Sets Revitalizantes
                </li>
            </ul>
        </div><div class="kit-inscripcion">
        	<img src="imagenes/kit-de-inscripcion-profesional.jpg" border="0">
            <p class="titulo_inscripcion cien izquierda" style="margin-bottom:15px;">
                Kit de Inscripción Profesional
            </p>
            
            <p class="texto_quienessomos qs2 center">

			</p>
            
            <p class="texto_quienessomos qs2" style="margin-bottom:0px;">
            	Contiene:
			</p>
            <ul class="list_inscripcion">
            	<li>
                	Bolsa Orixgen
                </li>
                <li>
                	Papelería
                </li>
                <li>
                	Sticker Orixgen
                </li>
                <li>
                	1 Fajilla de 20 Sachets
                </li>
                <li>
                	5 Sets Revitalizantes
                </li>
                <li>
                	1 Fajilla Extra de 20 Sachets
                </li>
                <li>
                	1 Set Revitalizante de Regalo
                </li>
            </ul>
        </div>
	</div>
    <div class="cien izquierda link-inscripcion" id="content-slider">
    	<a href="mas-informacion.php?rel=inscripcion"><div class="boton">QUIERO INSCRIBIRME</div></a>
    </div>
    <?php
		include('includes/pie_pagina_sr.php');
	?>
</div>
</div>
</body>
</html>