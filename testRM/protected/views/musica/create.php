<?php
/* @var $this MusicaController */
/* @var $model Musica */

$this->breadcrumbs=array(
	'Musicas'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Musica', 'url'=>array('index')),
	array('label'=>'Manage Musica', 'url'=>array('admin')),
);
*/
?>

<h1>Create Musica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>