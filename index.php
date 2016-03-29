<?php
	error_reporting(E_ERROR);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Orixgen</title>
<meta name="description" content="OriXgen es una empresa internacional nacida en México por fundadores con más de 40 años de experiencia en la venta directa siendo su principal esencia el autoempleo y ofreciendo productos innovadores utilizando la biotecnología como su principal fuente.">
<link rel="canonical" href="http://www.orixgen.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Orixgen" />
<meta property="og:description" content="OriXgen es una empresa internacional nacida en México por fundadores con más de 40 años de experiencia en la venta directa siendo su principal esencia el autoempleo y ofreciendo productos innovadores utilizando la biotecnología como su principal fuente." />
<meta property="og:url" content="http://www.orixgen.com/" />
<meta property="og:site_name" content="Orixgen" />
<meta property="og:image" content="http://www.orixgen.com/imagenes/orixgen_facebook.jpg" />

<link rel="stylesheet" href="style/nivo-slider.css" type="text/css" media="screen" />
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<link  href="style/responsive.css" rel="stylesheet" type="text/css" media="all" />
<!-- Fancybox -->
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="shortcut icon" href="imagenes/icono.ico">
<link rel="stylesheet" type="text/css" href="style/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="scripts/funciones.js"></script>
<!-- Fancybox -->
<!--Nivo Slider -->
<script src="scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">

var auxelevratio = 0;
var aux2elevratio = 0;

if (window.location.hash == '#close_window') window.close();

$(window).load(function() {
	
				var slider_object = document.getElementById('slider');
				var slider_trick_object = document.getElementById('slider_trick');
				
				var elevratio = $(window).width()/$(window).height();
				if(elevratio<1)
					{
						$('#elevslider0').attr("src","imagenes/vset-revitalizante-orixgen.jpg");
						$('#elevslider1').attr("src","imagenes/vslider_orixgen_I.jpg");
						$('#elevslider2').attr("src","imagenes/vslider_orixgen.jpg");
						$('#elevslider3').attr("src","imagenes/vslider_orixgen_II.jpg");
						$('#elevslider4').attr("src","imagenes/vset-revitalizante.png");
						/*
						var auxelevratio = setInterval(function()
							{
								var aux2elevratio = document.getElementById("elevslider1").src;
								if(aux2elevratio.indexOf('vslider_orixgen.jpg')!=-1)
									{									
										clearInterval(auxelevratio);
										slider_trick_object.style.display = 'none';
										slider_object.style.display = '';
									}
							}, 100);
						*/
					}
				else
					{
						$(".nivo-controlNav").css("opacity","1");
						slider_trick_object.style.display = 'none';
						slider_object.style.display = '';
					}
					
    $('#slider').nivoSlider({
        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 800, // Slide transition speed
        pauseTime: 6000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: false, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: false, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: '', // Prev directionNav text
        nextText: '', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){
									/*
									if(aux2elevratio==0)
										{
											jQuery('#slider').data('nivoSlider').stop();
											console.log('ds'+aux2elevratio);
											setTimeout(function() { jQuery('#slider').data('nivoSlider').start(); } ,6000);
											aux2elevratio = 1;
										}
									*/
									var elevratio = $(window).width()/$(window).height();
									if(elevratio<1 && auxelevratio==0)
										{
											var slider_object = document.getElementById('slider');
											var slider_trick_object = document.getElementById('slider_trick');
											slider_trick_object.style.display = 'none';
											slider_object.style.display = '';
											$(".nivo-controlNav").css("opacity","1");
											auxelevratio = 1;
										}
								}, // Triggers before a slide transition
        afterChange: function(){
									var index = $(".nivo-controlNav .active").attr('rel'); 
									
									console.log('Slider: '+index);
									
									if(index==3)
										{
											document.getElementById('registro_slider').style.display = '';
											$("#registro_slider").animate({ opacity: 1 }, 1000, 'swing', function() 
												{ 
												});
										}
									else
										{
											$("#registro_slider").animate({ opacity: 0 }, 800, 'swing', function() 
												{ 
													document.getElementById('registro_slider').style.display = 'none';
												});
										}
								}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function()
			{
				slider_trick_object.style.display = 'none';
				slider_object.style.display = '';
			} // Triggers when slider has loaded
    });
});

var myWidth;
var myHeight;
function dimensionventana() 
	{
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
	}

$(document).ready(function() {
	$("a[rel^='fancybox_video']").fancybox({ type: "iframe", width:657, height:377, padding:0, margin:0, scrolling:'no'});
	console.log('myHeight: '+myHeight);
	
	$( window ).resize(function() 
		{
			var elevratio = $(window).width()/$(window).height();
			if(elevratio<1)
				{
					$('#elevslider0').attr("src","imagenes/vset-revitalizante-orixgen.jpg");
					$('#elevslider1').attr("src","imagenes/vslider_orixgen_I.jpg");
					$('#elevslider2').attr("src","imagenes/vslider_orixgen.jpg");
					$('#elevslider3').attr("src","imagenes/vslider_orixgen_II.jpg");
					$('#elevslider4').attr("src","imagenes/vset-revitalizante.png");
				}
			else
				{
					$('#elevslider0').attr("src","imagenes/set-revitalizante-orixgen.jpg");
					$('#elevslider1').attr("src","imagenes/slider_orixgen_I.jpg");
					$('#elevslider2').attr("src","imagenes/slider_orixgen.jpg");
					$('#elevslider3').attr("src","imagenes/slider_orixgen_II.jpg");
					$('#elevslider4').attr("src","imagenes/set-revitalizante.png");
				}
				
		});
});
</script>
<!--Nivo Slider -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-58036380-1', 'auto');
ga('send', 'pageview');

</script>
</head>

<body onLoad="dimensionventana()">
	<?php
		$_SESSION['option_active'] = 0;
		include('configuracion/control.php');
		include('includes/encabezado.php');
	?>
    <div id="contenido">
    	<div class="slider-wrapper" style="margin:0 auto;">
            <div id="slider" class="nivoSlider" style="display:none;">
               <img id="elevslider0" src="imagenes/set-revitalizante-orixgen.jpg" border="0">
               <a href="set-revitalizante.php" title="Con&oacute;celo">
               		<img id="elevslider4" src="imagenes/set-revitalizante.png" border="0">
               </a>
               <img id="elevslider1" src="imagenes/slider_orixgen_I.jpg" border="0">
               <img id="elevslider2" src="imagenes/slider_orixgen.jpg" border="0">
               <a href="biotecnologia-nanotecnologia.php" title="Conoce m&aacute;s">
               		<img id="elevslider3" src="imagenes/slider_orixgen_II.jpg" border="0">
               </a>
            </div>
            <div id="slider_trick" style="width:100%; max-width:none; height:400px; background-image:url('imagenes/loading.gif'); background-position:center; background-repeat:no-repeat;">
            </div>
        </div>
        <div id="link_video">
        	<div class="div_link_video">
            	<div class="link_video">
                    <a href="includes/reproductor_youtube.php?video=kamvfmpc4to" rel="fancybox_video">
                        <img src="imagenes/video.png" border="0" width="100%">
                    </a>
                </div>
                <div class="telefono_home">
                    01.800.286.8439
                </div>
            </div>
        </div>
    </div>
    <?php
		include('includes/pie_pagina.php');
	?>
    <div id="registro_slider" style="opacity:0; display:none;">
       	<a href="registro.php">
        	<img class="registro_index" src="imagenes/registro_slider.png" border="0">
    	</a>
    </div>
</body>
</html>