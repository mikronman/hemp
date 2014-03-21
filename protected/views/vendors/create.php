<?php
/* @var $this VendorsController */
/* @var $model Vendors */

$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vendors', 'url'=>array('index')),
	array('label'=>'Manage Vendors', 'url'=>array('admin')),
);
?>

<h1>Create Vendors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>