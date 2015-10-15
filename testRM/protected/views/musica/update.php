<?php
/* @var $this MusicaController */
/* @var $model Musica */

$this->breadcrumbs=array(
	'Musicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Musica', 'url'=>array('index')),
	array('label'=>'Create Musica', 'url'=>array('create')),
	array('label'=>'View Musica', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Musica', 'url'=>array('admin')),
);
?>

<h1>Update Musica <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>