<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblbaidang */

$this->title = 'Update Tblbaidang: ' . $model->id_baidang;
$this->params['breadcrumbs'][] = ['label' => 'Tblbaidangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_baidang, 'url' => ['view', 'id' => $model->id_baidang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblbaidang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
