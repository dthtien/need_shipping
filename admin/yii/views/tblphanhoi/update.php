<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblphanhoi */

$this->title = 'Update Tblphanhoi: ' . $model->id_phanhoi;
$this->params['breadcrumbs'][] = ['label' => 'Tblphanhois', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_phanhoi, 'url' => ['view', 'id' => $model->id_phanhoi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblphanhoi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
