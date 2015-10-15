<?php
/* @var $this MusicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Musicas',
);

/*$this->menu=array(
	array('label'=>'Create Musica', 'url'=>array('create')),
	array('label'=>'Manage Musica', 'url'=>array('admin')),
);
*/
?>

<h1>Musicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
