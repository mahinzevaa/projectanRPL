<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Daftarpeer */

$this->title = 'Penambahan daftar PR';
$this->params['breadcrumbs'][] = ['label' => 'Daftar PR', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftarpeer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    

</div>
