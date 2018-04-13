<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DaftarpeerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Have you done these homeworks ?';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftarpeer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Daftar PR anda disini', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TugasKe',
            'NamaMatkul',
            'Tugas',
            'Deadline',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p> keterangan: Anda dapat melakukan pada searching mata kuliah yang diinginkan </p>
</div>
