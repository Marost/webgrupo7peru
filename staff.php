<?php
	$titulo="Staff";
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
              <param name="movie" value="flash/titulo_staff.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="6.0.65.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="flash/titulo_staff.swf" width="740" height="100">
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
            <td width="47%" height="158%" align="left" valign="top"><p><span class="titulo_cursiva"><span class="texto14-negro"><strong>Víctor Tipe Sánchez</strong></span><br />
</span><span class="texto14-plomo">Periodista y comunicador social</span></p>
<p><span class="texto14-plomo"> con 25 años de </span><span class="texto14-plomo">experiencia.</span></p>
<p><span class="texto14-plomo">Estudió en la Universidad </span></p>
            <p><span class="texto14-plomo">Nacional Mayor de San</span><span class="texto14-plomo"> Marcos, la 
  University </span></p>
            <p><span class="texto14-plomo">of Arizona y la Pontificia </span><span class="texto14-plomo">Universidad Católica del Perú. <br />
              Fue jefe de edición en el diario La Crónica, </span></p>
            <p><span class="texto14-plomo">Sub editor general 
              de diario El Sol y Editor </span></p>
            <p><span class="texto14-plomo">General del </span><span class="texto14-plomo">diario </span><span class="texto14-plomo">Expreso. Laboró en los
              canales</span></p>
            <p><span class="texto14-plomo"> de televisión: 2, 4, 7 y 13. <br />
              Se desempeñó como Gerente de Imagen Institucional </span></p>
            <p><span class="texto14-plomo">del Poder 
              Judicial, fue asesor de la Fiscal de la Nación</span></p>
            <p><span class="texto14-plomo"> y del despacho 
              ministerial en el Ministerio de</span></p>
            <p><span class="texto14-plomo"> la Mujer y Desarrollo Social.<br />
              Es autor de los libros: Manual de Periodismo y </span></p>
            <p><span class="texto14-plomo">El olor de la 
            retama, la captura de Abimael Guzmán.</span></p></td>
            <td width="47%" align="left" valign="middle"><p><span class="titulo_cursiva"><span class="texto14-negro"><strong>Víctor Tipe Sánchez</strong></span><br />
</span><span class="texto14-plomo">Journalist and  social communicator </span><span class="texto14-plomo">with 25 </span></p>
              <p><span class="texto14-plomo">years of experience. </span><span class="texto14-plomo">He studied at </span></p>
              <p><span class="texto14-plomo">Universidad  Nacional </span><span class="texto14-plomo">Mayor de San Marcos,</span></p>
              <p><span class="texto14-plomo"> the University of Arizona</span><span class="texto14-plomo"> and the Pontificia  </span></p>
              <p><span class="texto14-plomo">Universidad Católica del Perú. </span></p>
<p><span class="texto14-plomo">He was editor in chief in La Cronica journal,  </span></p>
            <p><span class="texto14-plomo">sub director on El Sol and Editor in chief in </span></p>
            <p><span class="texto14-plomo">Expreso journal. </span><span class="texto14-plomo">He has worked in  peruvian </span></p>
<p><span class="texto14-plomo">TV channels: 2, 4, 7 and 13. He has worked</span></p>
<p><span class="texto14-plomo"> as Institutional Image Manager  at the Poder</span></p>
            <p><span class="texto14-plomo"> Judicial in Peru. He was a main consultant </span></p>
            <p><span class="texto14-plomo">for the Peruvian Fiscal  of the Nation and the </span></p>
            <p><span class="texto14-plomo">Ministry of Women affairs and social development. </span></p>
            <p><span class="texto14-plomo">He is  author of two books: Journalism Manual </span></p>
            <p><span class="texto14-plomo">and The odor of retama, Abimael Guzman´s  capture. </span></p></td>
          </tr>
          <tr>
            <td height="158%" align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="158%" align="left" valign="top" class="texto14-plomo"><p><span class="texto14-negro"><strong>Jaime Tipe Sánchez</strong></span><br />
              <span class="texto14-plomo">Periodista y comunicador social </span></p>
              <p><span class="texto14-plomo">con 22 años de experiencia. <br />
                Dirige la revista digital de turismo e inversiones: <br />
                <a href="http://www.miraelperu.com" target="_blank">www.miraelperu.com</a><br />
              </span><span class="texto14-plomo">Se desempeñó como redactor principal y editor</span></p>
<p><span class="texto14-plomo"> interino de la 
  revista Domingo del diario</span></p>
              <p><span class="texto14-plomo"> La República, diario donde también 
              fue uno</span></p>
              <p><span class="texto14-plomo"> de los fundadores de la División Editorial.<br />
              Realizó un stage en la reconocida</span></p>
              <p><span class="texto14-plomo"> Revista El Gráfico de Argentina. <br />
              Ha sido igualmente jefe de redacción del </span></p>
              <p><span class="texto14-plomo">diario oficial El Peruano 
              y encargado de su rediseño</span></p>
              <p><span class="texto14-plomo"> con ocasión de los 180 años de 
              fundación.</span></p>
              <p><span class="texto14-plomo"> Fue invitado al diario Clarín de Argentina a</span></p>
              <p><span class="texto14-plomo"> un stage 
                periodístico. <br />
                Ha sido consultor en relaciones comunitarias.<br />
              Es autor de los libros: Con el ruego de su </span></p>
              <p><span class="texto14-plomo">difusión y 1939, el 
            primer grito.</span></p>
              <p class="texto14-plomo">Ha sido Editor General de la revista&nbsp;El Gráfico Perú.</p></td>
            <td align="left" valign="top"><p><strong><span class="texto14-negro">Jaime Tipe Sánchez</span></strong><br />
                <span class="texto14-plomo">Journalist and  social communicator</span></p>
              <p><span class="texto14-plomo"> with 22 years of experience. </span></p>
              <p><span class="texto14-plomo">He runs digital tourism and investment  magazine  <a href="http://www.miraelperu.com" target="_blank">www.miraelperu.com</a>. </span></p>
              <p><span class="texto14-plomo">He has worked  as main writer and intern </span></p>
<p><span class="texto14-plomo">editor of the magazine Domingo from </span></p>
              <p><span class="texto14-plomo">La Republica,  where he also was a founder </span></p>
              <p><span class="texto14-plomo">of the Editorial Division. </span></p>
              <p><span class="texto14-plomo">He made a stage </span><span class="texto14-plomo">in the  recognized magazine</span></p>
              <p><span class="texto14-plomo"> El Grafico in Argentina. </span></p>
<p><span class="texto14-plomo">He has been in charge of the  editorial department</span></p>
              <p><span class="texto14-plomo"> for the official Peruvian newspaper </span></p>
              <p><span class="texto14-plomo">El Peruano and in  charge of its redesign on its </span></p>
              <p><span class="texto14-plomo">180 anniversary. He was invited to the newspaper</span></p>
              <p><span class="texto14-plomo"> Clarin in Argentina to a journalist stage. </span></p>
              <p><span class="texto14-plomo">He has been consultant in community  relations. </span></p>
              <p><span class="texto14-plomo">He is author of two books: Con el ruego de</span></p>
              <p><span class="texto14-plomo"> su difusión and 1939, el primer grito.</span></p>
              <p><span class="texto14-plomo">He has worked as general  editor of &quot;El Gráfico Perú&quot; magazine.</span></p></td>
          </tr>
        </table>
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