<?php
$this->pageTitle=Yii::app()->name . ' - Contact Me';
?>



<div id="contact">

	<h1 style="text-align:center"> Get in Touch</h1>
	<p class="description" style="margin:0">
	If you have business inquiries, challenges, small projects or other questions, please fill out the following form to contact me. Thank you.
	</p>

	<div class="form" style="text-align:center;">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>


		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>65)); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>65)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'subject'); ?>
			<?php echo $form->textField($model,'subject',array('size'=>65,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'subject'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'message'); ?>
			<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'message'); ?>
		</div>
		<span class="required">*</span> are required.</p>

		<div class="row buttons" style="text-align:center">
			<?php echo CHtml::submitButton('Submit'); ?>
		</div>

	<?php $this->endWidget(); ?>

	</div><!-- form -->
	<?php if(Yii::app()->user->hasFlash('contact')){ ?>

		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('contact'); ?>
		</div>

	<?php } ?>
<div><!-- contact -->