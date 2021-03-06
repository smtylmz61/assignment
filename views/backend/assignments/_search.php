<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\assignment\models\AssignmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assignment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'teacher') ?>

    <?= $form->field($model, 'student') ?>
	
    <?= $form->field($model, 'lesson') ?>
	
    <?= $form->field($model, 'content') ?>
	
    <?= $form->field($model, 'status') ?>
	
    <?= $form->field($model, 'date') ?>


    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
