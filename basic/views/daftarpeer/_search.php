<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DaftarpeerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftarpeer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'TugasKe') ?>

    <?= $form->field($model, 'NamaMatkul') ?>

    <?= $form->field($model, 'Tugas') ?>

    <?= $form->field($model, 'Deadline') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
