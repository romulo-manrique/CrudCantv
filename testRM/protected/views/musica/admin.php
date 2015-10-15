<?php
/* @var $this MusicaController */
/* @var $model Musica */

$this->breadcrumbs=array(
	'Musicas'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Musica', 'url'=>array('index')),
	array('label'=>'Create Musica', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#musica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Busqueda por Genero, elimina y modifica si lo desea </h1>


</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'musica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'genero',
		array('header'=>'Cancion',
				'value'=>'$data->cancion',
				),
		array('header'=>'Grupo-Banda',
				'value'=>'$data->grupo',
				),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
