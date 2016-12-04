<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblbaidangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblbaidang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_baidang') ?>

    <?= $form->field($model, 'diachishop') ?>

    <?= $form->field($model, 'sdtshop') ?>

    <?= $form->field($model, 'diachinguoinhan') ?>

    <?= $form->field($model, 'sdtnguoinhan') ?>

    <?php // echo $form->field($model, 'ghichu') ?>

    <?php // echo $form->field($model, 'tenmathang') ?>

    <?php // echo $form->field($model, 'cannang') ?>

    <?php // echo $form->field($model, 'tienung') ?>

    <?php // echo $form->field($model, 'phiship') ?>

    <?php // echo $form->field($model, 'id_shop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
