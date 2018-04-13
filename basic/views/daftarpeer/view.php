<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Daftarpeer */

$this->title = $model->TugasKe;
$this->params['breadcrumbs'][] = ['label' => 'Daftar PR', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftarpeer-view">

    <h1><?= Html::encode($this->title) ?></h1>

  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TugasKe',
            'NamaMatkul',
            'Tugas',
            'Deadline',
        ],
    ]) ?>

  <p>
        <?= Html::a('Update', ['update', 'id' => $model->TugasKe], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->TugasKe], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
