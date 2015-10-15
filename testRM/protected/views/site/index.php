<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$usuario = Yii::app()->user->name;

?>

Hola <?php echo $usuario ?> bienvenido a la pagina donde guardaras tu musica y podras escucharla mediante Youtube.com, como por ejemplo esta cancion:

<br>
<br>
<br>
<center>
	<?php 
		$var = "https://www.youtube.com/watch?v=W0ylEMRN9BM";

		//echo "<iframe width='420' height='315' src='". $var."'frameborder='0' allowfullscreen></iframe>";

		echo "<iframe width='420' height='315' src='https://www.youtube.com/embed/khbDnLqe_Wk' frameborder='0' allowfullscreen></iframe>"
	?>

</center>	
<br>
<br>
<br>
En una de las pestañas encontraras tu musica, pero si quieres hacer una busqueda mas rapida dirigite a
este link :
<a href="index.php?r=musica/admin"> Busqueda por genero </a>

En donde podras modificar y eliminar si lo deseas
