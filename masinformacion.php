<?php
	error_reporting(E_ERROR);
	session_start();
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

<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<link  href="style/responsive.css" rel="stylesheet" type="text/css" media="all" />
<!-- Fancybox -->
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="shortcut icon" href="imagenes/icono.ico">
<link rel="stylesheet" type="text/css" href="style/jquery.fancybox-1.3.4.css" media="screen" />
<!-- Fancybox -->
<script type="text/javascript" language="javascript" src="scripts/funciones.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
	$("a[rel^='fancybox_aviso']").fancybox({ type: "iframe", width:720, height:650, padding:0, margin:0, scrolling:'no'});
});

$(document).ready(function() {
	$("a[rel^='fancybox_video']").fancybox({ type: "iframe", width:657, height:377, padding:0, margin:0, scrolling:'no'});
	console.log('myHeight: '+myHeight);
});

function Compartir(url)
   	{
		var opciones = "fullscreen=0" + 
                   ",toolbar=0" + 
                   ",location=0" + 
                   ",status=0" + 
                   ",menubar=0" + 
                   ",scrollbars=1" + 
                   ",resizable=0"  + 
                   ",width=600" + 
                   ",height=300" + 
                   ",left=300"  + 
                   ",top=50"; 
		
   		var ventana = window.open(url, 'Comparte Orixgen', opciones);
	}
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-58036380-1', 'auto');
ga('send', 'pageview');

</script>
<!-- Google Code para etiquetas de remarketing -->
<!--------------------------------------------------
Es posible que las etiquetas de remarketing todavía no estén asociadas a la información de identificación personal o que estén en páginas relacionadas con las categorías delicadas. Para obtener más información e instrucciones sobre cómo configurar la etiqueta, consulte http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
var google_tag_params = {
dynx_itemid: 'REPLACE_WITH_VALUE',
dynx_itemid2: 'REPLACE_WITH_VALUE',
dynx_pagetype: 'REPLACE_WITH_VALUE',
dynx_totalvalue: 'REPLACE_WITH_VALUE',
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 968984020;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/968984020/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '422916984557378');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=422916984557378&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '518048201632312',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>  
<?php
		$_SESSION['option_active'] = -1;
		include('configuracion/control.php');
		include('includes/encabezado_informacion.php');
		include(DIR_CLASES.'clasecontactoinformacion.php');
?>
<div id="contenido_registro">
	<p id="titulo_registro" class="setentaycinco izquierda">
    	Deseo conocer más acerca<br/>de Orixgen
    </p>
    <div class="docepuntocinco derecha" style="margin-top:24px;">
    	<a href="http://www.facebook.com/Orixgen" target="_blank">
        	<img class="link_redes" src="imagenes/facebook.png" border="0" onMouseOver="this.src = 'imagenes/facebook_c.png';" onMouseOut="this.src = 'imagenes/facebook.png';">	
        </a>
        <a href="http://www.twitter.com/Orixgen" target="_blank">
        	<img class="link_redes" src="imagenes/twitter.png" border="0" onMouseOver="this.src = 'imagenes/twitter_c.png';" onMouseOut="this.src = 'imagenes/twitter.png';">	
        </a>
        <a href="http://www.pinterest.com/Orixgen" target="_blank">
        	<img class="link_redes" src="imagenes/pinterest.png" border="0" onMouseOver="this.src = 'imagenes/pinterest_c.png';" onMouseOut="this.src = 'imagenes/pinterest.png';">	
        </a>
    </div>
    <div class="setentaycinco izquierda">
<?php

	$contacto = new Contacto;
	
	$contacto->campos = array(array('Nombre', 'nombre', 'text', '30%', 'linea_contacto', 'car', '', 'Nombre'), array('Apellido', 'apellido', 'text', '30%', 'linea_contacto', 'car', '', 'Apellido'), array('Municipio', 'municipio', 'text', '30%', 'linea_contacto', 'car', '', 'Municipio'), array('Estado', 'estado', 'combo', '30%', 'linea_contacto', 'car', '', 'Estado'), array('C.P.', 'cp', 'text', '30%', 'linea_contacto', 'num', '', 'Codigo Postal'), array('Email', 'email', 'text', '80%', 'linea_contacto', 'num_car', '', 'Email'), array('Teléfono', 'telefono', 'phone', array('15%', '83%'), 'linea_contacto', 'num', '', 'Teléfono'), array('Adquirir el Set Revitalizante con Células-Madre Orixgen', 'set_revitalizante', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'set_revitalizante'".').value = 1; else document.getElementById('."'set_revitalizante'".').value = 0;"', 'Set Revitalizante', 'interes'), array('Iniciar mi propio Negocio', 'negocio', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'negocio'".').value = 1; else document.getElementById('."'negocio'".').value = 0;"', 'Propio Negocio', 'interes'), 
	array('Facebook', 'facebook', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'facebook'".').value = 1; else document.getElementById('."'facebook'".').value = 0;"', 'Facebook', 'medio'), 
	array('Google', 'google', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'google'".').value = 1; else document.getElementById('."'google'".').value = 0;"', 'Google', 'medio'), 
	array('Twitter', 'twitter', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'twitter'".').value = 1; else document.getElementById('."'twitter'".').value = 0;"', 'Twitter', 'medio'), 
	array('Emprendedora independiente', 'emprendedora', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'emprendedora'".').value = 1; else document.getElementById('."'emprendedora'".').value = 0;"', 'Emprendedora independiente', 'medio'), 
	array('Otro', 'otro', 'radio', '80%', 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'otro'".').value = 1; else document.getElementById('."'otro'".').value = 0; DetallesOtro(this.checked);"', 'Otro', 'medio'), array('Otro Medio', 'otro_medio', 'text', '80%', 'linea_contacto', 'num_car', '', 'Otro Medio'), array('Experiencia en venta directa', 'experiencia', 'radio', array('40%', '58%'), 'linea_contacto', 'car', 'onclick="if(this.checked) document.getElementById('."'experiencia'".').value = 1; else document.getElementById('."'experiencia'".').value = 0; DetallesExperiencia(this.checked);"', 'Experiencia'), array('Años de Experiencia', 'tiempo_experiencia', 'text', array('19%', '79%'), 'linea_contacto', 'num', '', 'Tiempo de Experiencia'), array('Productos', 'productos_experiencia', 'text', '80%', 'linea_contacto', 'num_car', '', 'Experiencia en productos'));
	
	$contacto->grupos_campos = array('interes' => array('Estoy interesada en', 'interes', 'radio', '80%', 'linea_contacto', 'car', 'onclick="document.getElementById('."'interes'".').value = this.value;"', 'Interés'), 'medio' => array('Medio por el cual me enteré de Orixgen', 'medio', 'radio', '80%', 'linea_contacto', 'car', 'onclick="document.getElementById('."'medio'".').value = this.value;"', 'Medio por el que me enteré'));
						
	$contacto->campos_req = array('nombre', 'apellido', 'municipio', 'estado', 'cp', 'email', 'telefono', 'interes', 'medio', 'otro_medio', 'tiempo_experiencia', 'productos_experiencia');
	$contacto->etiqueta_mensaje = 'Mensaje';
	$contacto->dimensiones_mensaje = array('79%', '8em');
	$contacto->clase = 'contacto';
	$contacto->class_mensaje = 'contacto_input';
	$contacto->submit_str = 'Enviar';
	$contacto->message_sent = 'Su mensaje ha sido enviado con &eacute;xito, gracias por sus comentarios.';
	$contacto->clase_error = 'clase_error';
	$contacto->correo_destino = 'vdme55@hotmail.com';
	$contacto->image_button = 'enviar_registro.png';
	$contacto->name_contacto = 'registro';
			
	echo $contacto->DespliegaContacto();

	echo '</div>';
    echo '<div>';
		echo '<div id="div_recomienda" class="div_recomienda">';
			echo '<p align="left" style="padding-left:3px; margin:0px;" class="tag_recomienda contacto_input_tag">';
				echo 'Recomienda a una amiga';
			echo '</p>';
			echo '<input id="quien_recomienda" type="text" class="contacto_input" style="font-style:italic; color:#B3AAAA; width="35%;"" onkeypress="return ValidaCaracteres(event, '. "'car'".')" value="Tu nombre" onFocus="TextoDefault_II(1);" onBlur="TextoDefault_II(0);"/>';
			echo '<input id="recomienda" type="text" class="contacto_input" style="font-style:italic; color:#B3AAAA;" onkeypress="return ValidaCaracteres(event, '. "'num_car'".')" value="Email de tu amiga" onFocus="TextoDefault(1);" onBlur="TextoDefault(0);"/>';
			echo '<input id="button_recomienda" class="boton" type="image" src="imagenes/recomendar.png" onclick="Recomendar();" style="display:none; opacity:0; margin-left:5px;">';
			echo '<div id="recomienda_mensaje" class="clase_error" style="opacity:0;">El email ingresado no es válido.</div>';
		echo '</div>';
		echo '<p class="compartir">';
			echo 'Comparte: ';
		echo '</p>';
		echo '<div style="float:left;">';
			echo '<img src="imagenes/facebook_c.png" border="0" onClick="Compartir('."'".'https://www.facebook.com/dialog/share?app_id=157106077653394&display=iframe&href='.urlencode('http://www.orixgen.com/registro.php?ref=page').'&redirect_uri='.urlencode('http://www.orixgen.com/#close_window')."');".'" class="share_icons">';
			#echo '<img src="imagenes/facebook_c.png" border="0" onClick="Compartir('."'".'https://www.facebook.com/dialog/share?app_id=518048201632312&display=iframe&href='.urlencode('http://www.orixgen.com/registro.php?ref=page').'&redirect_uri='.urlencode('http://www.orixgen.com/#close_window')."');".'" class="share_icons">';
			#echo '<img src="imagenes/facebook_c.png" border="0" onClick="Compartir('."'".'https://www.facebook.com/dialog/share?app_id=518048201632312&display=popup&href='.urlencode('http://www.orixgen.com/registro.php?ref=page')."');".'" class="share_icons">';
			
			echo '<img src="imagenes/twitter_c.png" border="0" onClick="Compartir('."'".'https://twitter.com/share?url='.urlencode('http://www.orixgen.com').'&counturl='.urlencode('http://www.orixgen.com/registro.php?ref=page').'&text='.urlencode('Regístrate en Orixgen').'&via=Orixgen'."');".'" class="share_icons">';
		echo '</div>';
    echo '</div>';
	if($_GET['ref']=='page')
		{
			echo '<a id="a_video" href="includes/reproductor_youtube.php?video=XdZxBTqJo2A" rel="fancybox_video">';
				echo '<div></div>';
			echo '</a>';
			echo '<script type="text/javascript" language="javascript">';
				echo 'setTimeout(function(){ document.getElementById("a_video").click(); }, 700)';
			echo '</script>';
		}
echo '</div>';
/*
echo '</div>';
echo '</div>';
*/

	include('includes/pie_pagina_sr.php');
?>
</body>
</html>