<?php
/* @var $this FileController */
/* @var $data File */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILPNPartNumber')); ?>:</b>
	<?php echo CHtml::encode($data->FILPNPartNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILFilePath')); ?>:</b>
	<?php echo CHtml::encode($data->FILFilePath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILFileName')); ?>:</b>
	<?php echo CHtml::encode($data->FILFileName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILView')); ?>:</b>
	<?php echo CHtml::encode($data->FILView); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILNotes')); ?>:</b>
	<?php echo CHtml::encode($data->FILNotes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('part_id')); ?>:</b>
	<?php echo CHtml::encode($data->part_id); ?>
	<br />


</div>