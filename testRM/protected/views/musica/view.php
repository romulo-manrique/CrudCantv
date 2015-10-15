<?php
/* @var $this MusicaController */
/* @var $model Musica */

$this->breadcrumbs=array(
	'Musicas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Musica', 'url'=>array('index')),
	array('label'=>'Create Musica', 'url'=>array('create')),
	array('label'=>'Update Musica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Musica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Musica', 'url'=>array('admin')),
);
?>

<h1>View Musica #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cancion',
		'grupo',
		'genero',
		'video',
		'usuario',
	),
)); ?>
