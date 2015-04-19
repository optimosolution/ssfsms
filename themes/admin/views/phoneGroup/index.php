<?php
/* @var $this PhoneGroupController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Phone Groups',
);

$this->menu=array(
	array('label'=>'Create PhoneGroup','url'=>array('create')),
	array('label'=>'Manage PhoneGroup','url'=>array('admin')),
);
?>

<h1>Phone Groups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>