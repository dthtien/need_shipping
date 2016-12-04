<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tblbaidang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblbaidang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_baidang')->textInput() ?>

    <?= $form->field($model, 'diachishop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sdtshop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachinguoinhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sdtnguoinhan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ghichu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tenmathang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cannang')->textInput() ?>

    <?= $form->field($model, 'tienung')->textInput() ?>

    <?= $form->field($model, 'phiship')->textInput() ?>

    <?= $form->field($model, 'id_shop')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
