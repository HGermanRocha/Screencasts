<?php

use yii\helpers\html;
use yii\bootstrap\ActiveForm;

?>

<?php
	if(Yii::$app->session->hasFlash('success'))
	{
		echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
	}
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<?= Html::submitButton('submit', ['class'=>'btn btn-success']); ?>