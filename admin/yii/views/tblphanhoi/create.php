<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblphanhoi */

$this->title = 'Create Tblphanhoi';
$this->params['breadcrumbs'][] = ['label' => 'Tblphanhois', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblphanhoi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
