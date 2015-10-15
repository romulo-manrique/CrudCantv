<?php
/* @var $this MusicaController */
/* @var $data Musica */
?>

<div class="view">
	<?php
		$us=CHtml::encode($data->usuario);
		$us2=Yii::app()->user->name;	
	?>
	
	<?php
	 if ($us == $us2) 
	 {
	?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancion')); ?>:</b>
	<?php echo CHtml::encode($data->cancion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo')); ?>:</b>
	<?php echo CHtml::encode($data->grupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video')); ?>:</b>

	<br /> <br/>
	<center>	
	<?php 
		$videos=CHtml::encode($data->video);	
		echo '<iframe width="560" height="315" src="' . $videos . '" frameborder="0" allowfullscreen> </iframe>';		
 } 
	?>
	</center>
	<br /><br />
</div>