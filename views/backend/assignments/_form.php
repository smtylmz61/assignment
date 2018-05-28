<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\assignment\models\Assignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'teacher')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'student')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'lesson')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Gelir' => 'Gelir', 'Gider' => 'Gider', ], ['prompt' => '']) ?>

	
    <?= $form->field($model, 'date')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <?= $form->field($model, 'author')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
