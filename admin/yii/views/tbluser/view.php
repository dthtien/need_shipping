<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tbluser */

$this->title = $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Tblusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbluser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_user], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_user], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_user',
            'email:email',
            'password',
            'hoten',
            'sdt',
            'diachi',
            'loai',
        ],
    ]) ?>

</div>
