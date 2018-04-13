<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Daftarpeer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftarpeer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaMatkul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tugas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deadline')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-info']) ?>  <br><br><br><br><br><br><br>
        &#160; <p align="center"> Silahkan Klik tombol dibawah <p align="center"><a class="btn btn-lg btn-success" href="http://localhost/ivan/basic/web/index.php?r=daftarpeer" align="center">Lihat daftar PR anda</a></p> <p align="center">ketika anda sudah meng-update </p>
    </div>

    <?php ActiveForm::end(); ?>

</div>
