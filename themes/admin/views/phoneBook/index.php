<?php
/* @var $this PhoneBookController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Phone Books',
);

$this->menu=array(
	array('label'=>'Create PhoneBook','url'=>array('create')),
	array('label'=>'Manage PhoneBook','url'=>array('admin')),
);
?>

<h1>Phone Books</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>