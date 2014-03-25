<?php
	$titulo="Nosotros";
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
					?> Nosotros
					<?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Nosotros <?php } ?>
                    
                    </a></td>
                  <td width="20%" align="center"><a href="servicios.php">
				  <?php if ($titulo=="Servicios")
				  	{ 
						echo "<font color='#999999'><i>";
					?> Servicios
					<?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Servicios <?php } ?>                  
                  </a></td>
                  <td width="20%" align="center"><a href="staff.php">
				  <?php if ($titulo=="Staff")
				  	{ 
						echo "<font color='#999999'><i>";
					?> Staff
					<?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Staff <?php } ?>
                  </a></td>
                  <td width="20%" align="center"><a href="clientes.php">
				  <?php if ($titulo=="Clientes")
				  	{ 
						echo "<font color='#999999'><i>";
					?> Clientes
					<?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Clientes <?php } ?>
                  </a></td>
                  <td width="20%" align="center"><a href="contacto.php">
                  <?php if ($titulo=="Contactenos")
				  	{ 
						echo "<font color='#999999'><i>";
					?> Contáctenos
					<?php echo "</i>";
					} 
					else { 
						echo "<font color='#000'>";
					?> Contáctenos <?php } ?>
                  </a></td>
                </tr>
          </table>
      <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p><img src="imagenes/text_logo.jpg" width="250" height="75" alt="" /></p>
        </div><!--FIN MENU SUPERIOR-->
      </div><!--FIN SUPERIOR-->
      <div id="fondo_grupo7">
      <div id="contenido">
      	<div id="texto_superior"> 
          <h1 class="texto24-plomo">
            <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="740" height="100">
              <param name="movie" value="flash/titulo_nosotros.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="6.0.65.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="flash/titulo_nosotros.swf" width="740" height="100">
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
          <table width="720" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="50%" align="left" valign="top" class="texto14-plomo"><p><strong>Grupo Siete</strong> Consultorías y Publicaciones, es <br />
                una empresa innovadora en comunicación <br />
                integral, conformada por un grupo de profesionales <br />
                con más de 20 años de experiencia en los diversos <br />
                campos de la comunicación.<br />
                Contamos con un staff altamente calificado que <br />
                permite desarrollar productos editoriales y <br />
                periodísticos en todas sus especialidades (televisión, <br />
                radio, plataformas digitales y prensa escrita).<br />
                En el campo de la imagen institucional, corporativa <br />
                y organización de eventos garantizamos igualmente <br />
                un servicio a la medida que demanda su empresa.<br />
                A nivel de relaciones comunitarias y diagnóstico 
                social </p>
                <p>nuestro equipo está calificado para ofrecerle 
                  resultados concretos que satisfagan su expectativa 
              y necesidad.</p></td>
              <td width="50%" align="left" valign="top" class="texto14-plomo"><p><strong>Grupo Siete </strong>Consultorías  y Publicaciones, </p>
                <p>is an innovative company in communication, </p>
                <p>formed by a group  of professionals with more </p>
                <p>than 20 years of experience in different</p>
                <p> communication areas. <br />
                We have a very  high qualified staff that let us </p>
                <p>to develop publishing and journalistic  products</p>
                <p> in these specialties (television, radio, digital</p>
                <p> products and  journalism).<br />
                In respect to  corporative image and organizing</p>
                <p> events, you can be sure that we will give you  a</p>
                <p> first class service. <br />
              If we refer to  develop a good relationship with native communities and making a social  diagnosis, our team is qualified to offer you the solutions you expect  according to your needs. </p></td>
            </tr>
          </table>
        </div><!--FIN TEXTO-->
      <div id="libros_inicio">
      		<div id="contenido_portada_izq">
            	<div id="portada">
                	<div id="text_der">
                		<div id="titulo_portada1">LIBROS ></div>
                		<!--FIN TITULO PORTADA-->
                		<!--FIN TITULO PORTADA-->
                    </div><!--FIN TEXTO DERECHA-->
                    <div id="img_portada1"><img src="imagenes/portadas/img1.jpg" width="105" height="154" /></div><!--FIN IMAGEN PORTADA-->
                </div><!--FIN PORTADA-->
                
                <div id="portada">
                	<div id="text_der">
                		<div id="titulo_portada1">
                		  <p>Revistas y Encartes ></p>
</div>
                		<!--FIN TITULO PORTADA-->
                    </div><!--FIN TEXTO DERECHA-->
                    <div id="img_portada1">
               	    <img src="imagenes/portadas/img2.jpg" width="105" height="154" /></div><!--FIN IMAGEN PORTADA-->
                </div><!--FIN PORTADA-->
            </div><!--FIN CONTENIDO PORTADA IZQUIERDA-->
            <div id="contenido_portada_der">
            <div id="portada">
                	<div id="text_der">
                		<div id="titulo_portada2">
                		  <p>PUBLICACIONES DIGITALES ></p>
</div>
                		<!--FIN TITULO PORTADA-->
                    </div><!--FIN TEXTO DERECHA-->
                    <div id="img_portada2">
               	    <img src="imagenes/portadas/img3.jpg" width="200" height="154" /></div><!--FIN IMAGEN PORTADA-->
              </div><!--FIN PORTADA-->
            
            <div id="portada">
                	<div id="text_der">
                		<div id="titulo_portada2">ASESORÍA ></div>
                		<!--FIN TITULO PORTADA-->
                    </div><!--FIN TEXTO DERECHA-->
                    <div id="img_portada2">
               	    <img src="imagenes/portadas/img4.jpg" width="200" height="154" /></div><!--FIN IMAGEN PORTADA-->
              </div><!--FIN PORTADA-->
            </div><!--FIN CONTENIDO PORTADA DERECHA-->
      </div>
      <div id="footer">
      	&copy; Copyright  - Grupo 7 Perú </div>
      </div><!--FIN CONTENIDO-->
      </div>
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