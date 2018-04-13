<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Daftarpeer */

$this->title = 'Update PR anda';
$this->params['breadcrumbs'][] = ['label' => 'Daftar PR', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TugasKe, 'url' => ['view', 'id' => $model->TugasKe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftarpeer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
