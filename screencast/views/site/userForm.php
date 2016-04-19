<?php

use yii\helpers\html;
use yii\bootstrap\ActiveForm;

?>

<?php
	if(Yii::$app->session->hasFlash('success'))
	{
		echo Yii::$app->session->getFlash('success');
	}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<?= Html::submitButton('submit', ['class'=>'btn btn-success']); ?>