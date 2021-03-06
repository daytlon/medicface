<?php
/* @var $this MedicamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicamentos',
);

if (yii::app()->user->rol == yii::app()->validarRol->esMedico() || yii::app()->user->rol == yii::app()->validarRol->esAdmin()) {
	$this->menu=array(
		array('label'=>'Crear Medicamento', 'url'=>array('create')),
		array('label'=>'Gestionar Medicamentos', 'url'=>array('admin')),
	);
}
?>

<h1>Medicamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
)); ?>
