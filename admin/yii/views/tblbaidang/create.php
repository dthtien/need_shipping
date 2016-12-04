<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblbaidang */

$this->title = 'Create Tblbaidang';
$this->params['breadcrumbs'][] = ['label' => 'Tblbaidangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblbaidang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
