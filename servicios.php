<?php
	$titulo="Servicios";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grupo 7 - <?php echo $titulo ?></title>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div id="principal">
	<div id="interior">
	  <div id="superior">
        	<div id="logo_sup">
        	  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="120" height="138">
        	    <param name="movie" value="flash/logo.swf" />
        	    <param name="quality" value="high" />
        	    <param name="wmode" value="transparent" />
        	    <param name="swfversion" value="6.0.65.0" />
        	    <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
        	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
        	    <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
        	    <!--[if !IE]>-->
        	    <object type="application/x-shockwave-flash" data="flash/logo.swf" width="120" height="138">
        	      <!--<![endif]-->
        	      <param name="quality" value="high" />
        	      <param name="wmode" value="transparent" />
        	      <param name="swfversion" value="6.0.65.0" />
        	      <param name="expressinstall" value="Scripts/expressInstall.swf" />
        	      <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
        	      <div>
        	        <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
        	        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
      	        </div>
        	      <!--[if !IE]>-->
      	      </object>
        	    <!--<![endif]-->
      	    </object>
   	</div><!--FIN LOGO SUPERIOR-->
   	<div id="menu_sup">
   	  <table width="570" border="0" align="center" cellpadding="0" cellspacing="0">
   	    <tr>
   	      <td width="20%" align="center"><a href="index.php">
   	        <?php if ($titulo=="Nosotros")
				  	{ 
						echo "<font color='#999999'><i>";
					?>
   	        Nosotros <?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Nosotros
   	        <?php } ?>
 	        </a></td>
   	      <td width="20%" align="center"><a href="servicios.php">
   	        <?php if ($titulo=="Servicios")
				  	{ 
						echo "<font color='#999999'><i>";
					?>
   	        Servicios <?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Servicios
   	        <?php } ?>
 	        </a></td>
   	      <td width="20%" align="center"><a href="staff.php">
   	        <?php if ($titulo=="Staff")
				  	{ 
						echo "<font color='#999999'><i>";
					?>
   	        Staff <?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Staff
   	        <?php } ?>
 	        </a></td>
   	      <td width="20%" align="center"><a href="clientes.php">
   	        <?php if ($titulo=="Clientes")
				  	{ 
						echo "<font color='#999999'><i>";
					?>
   	        Clientes <?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Clientes
   	        <?php } ?>
 	        </a></td>
   	      <td width="20%" align="center"><a href="contacto.php">
   	        <?php if ($titulo=="Contactenos")
				  	{ 
						echo "<font color='#999999'><i>";
					?>
   	        Contáctenos <?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Contáctenos
   	        <?php } ?>
 	        </a></td>
 	      </tr>
 	    </table>
   	  <p>&nbsp;</p>
   	  <p>&nbsp;</p>
   	  <p><img src="imagenes/text_logo.jpg" width="250" height="75" alt="" /></p>
 	  </div>
   	<!--FIN MENU SUPERIOR-->
      </div><!--FIN SUPERIOR-->
      <div id="contenido">
      	<div id="texto_superior"> 
          <h1 class="texto24-plomo">
            <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="740" height="100">
              <param name="movie" value="flash/titulo_servicios.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="6.0.65.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="flash/titulo_servicios.swf" width="740" height="100">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="6.0.65.0" />
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
          </h1>
      	</div>
        <div id="texto">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" align="left" valign="top"><p class="texto14-plomo">Diseñamos estrategias de comunicación</p>
              <p class="texto14-plomo"> e información.<br />
              Editamos diversas publicaciones y productos</p>
              <p class="texto14-plomo"> en formato 
                impreso y digital.<br />
                Desarrollamos y promovemos los contenidos digitales.<br />
              Realizamos edición fotográfica, producción </p>
              <p class="texto14-plomo">audiovisual: vídeos, 
              edición lineal y no-lineal,</p>
              <p class="texto14-plomo"> guiones y cuñas de radio.<br />
              Ofrecemos consultorías en comunicación y </p>
              <p class="texto14-plomo">diagnóstico social.
            Organizamos, planificamos y</p>
            <p class="texto14-plomo"> promovemos eventos.</p></td>
            <td width="50%" align="left" valign="top" class="texto14-plomo"><p>We design  communication and information</p>
              <p> strategies.<br />
              We edit and  publish several products</p>
              <p> in printing and digital form. <br />
                We develop and  promote digital contents. <br />
              We make photo  edition, audiovisual production,</p>
              <p>and lineal and no lineal edition, scripts </p>
              <p>and  radio cues. <br />
              We offer  communication consultants</p>
              <p> and social diagnosis. <br />
            We organize, plan  and promote events. </p></td>
          </tr>
        </table>
        <p>&nbsp;</p>
<p>&nbsp;</p>
        <div id="content_libros">
        	<div id="titulo_portada3">LIBROS &gt;</div>
            <div id="libro1">
                <div id="portada1"><img src="imagenes/servicios/libro1/1.jpg" width="202" height="176" /></div>
                <div id="content_libro1"><iframe src="servicios/libro1.html" width="415" height="190" frameborder="0" scrolling="no"></iframe></div>
            </div>
            <div id="libro1">
                <div id="portada1"><img src="imagenes/servicios/libro2/1.jpg" width="202" height="176" /></div>
                <div id="content_libro1">
                  <iframe src="servicios/libro2.html" width="382" height="190" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
            <div id="libro1">
                <div id="portada1"><img src="imagenes/servicios/libro3/1.jpg" width="202" height="176" /></div>
                <div id="content_libro1">
                  <iframe src="servicios/libro3.html" width="382" height="190" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
            
            <div id="libro1">
            	<div id="portada1"><img src="imagenes/servicios/reniec16/portada.jpg" width="202" /></div>
                <div id="content_libro1">
                  <iframe src="servicios/libro12.html" width="500" height="269" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
            
            <div id="libro1">
            	<div id="portada1"><img src="imagenes/servicios/reniec8/pagina_001.jpg" width="202" /></div>
                <div id="content_libro1">
                  <iframe src="servicios/libro11.html" width="500" height="299" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
            
            
            
        </div>
        <div id="content_libros">
        	<div id="titulo_portada3">REVISTAS &gt;</div>
            <div id="libro1">
                <div id="portada1"><img src="imagenes/servicios/libro4/1.jpg" width="174" height="250" /></div>
                <div id="content_libro2"><iframe src="servicios/libro4.html" width="359" height="264" frameborder="0" scrolling="no"></iframe></div>
            </div>
            <div id="libro1">
                <div id="portada1"><img src="imagenes/servicios/libro5/1.jpg" width="174" height="232" /></div>
                <div id="content_libro2"><iframe src="servicios/libro5.html" width="359" height="246" frameborder="0" scrolling="no"></iframe></div>
            </div>
            <div id="libro1">
                <div id="portada1"><img src="imagenes/servicios/libro6/1.jpg" width="174" height="246" /></div>
                <div id="content_libro2"><iframe src="servicios/libro6.html" width="358" height="260" frameborder="0" scrolling="no"></iframe></div>
            </div>
            
            <div id="libro1">
                <div id="portada1">
                	<img src="imagenes/servicios/oefa/portada.jpg" width="174" /></div>
                <div id="content_libro2"><iframe src="servicios/libro13.html" width="400" height="254" frameborder="0" scrolling="no"></iframe></div>
            </div>
            
            <div id="libro1">
                <div id="portada1">
                	<img src="imagenes/servicios/reniec15/01.jpg" width="174" height="246" /></div>
                <div id="content_libro2"><iframe src="servicios/libro14.html" width="400" height="260" frameborder="0" scrolling="no"></iframe></div>
            </div>
            
        </div>
        <div id="content_libros">
        	<div id="titulo_portada3">ENCARTES &gt;</div>
            <div id="libro1">
              <div id="content_libro3"><iframe src="servicios/libro7.html" width="415" height="280" frameborder="0" scrolling="no"></iframe></div>
            </div>
            
            <div id="libro1">
              <div id="content_libro3">
              <iframe src="servicios/libro10.html" width="415" height="305" frameborder="0" scrolling="no"></iframe></div>
            </div>
            
        </div>
        <div id="content_libros">
        	<div id="titulo_portada3">PUBLICACIONES DIGITALES &gt;</div>
            <div id="libro2">
              <div id="content_libro3"><iframe src="servicios/libro8.html" width="364" height="244" frameborder="0" scrolling="no"></iframe></div>
          </div>
        </div>
        <div id="content_libros"></div>
        </div><!--FIN TEXTO-->
        <div id="footer">
      	&copy; Copyright - Grupo 7 Perú </div>
      </div><!--FIN CONTENIDO-->
    </div><!--FIN INTERIOR-->
</div><!--FIN PRINCIPAL-->
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
//-->
</script>
</body>
</html>