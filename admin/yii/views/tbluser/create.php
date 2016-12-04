<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tbluser */

$this->title = 'Create Tbluser';
$this->params['breadcrumbs'][] = ['label' => 'Tblusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbluser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
