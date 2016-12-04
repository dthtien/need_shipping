<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tblphanhoi */

$this->title = $model->id_phanhoi;
$this->params['breadcrumbs'][] = ['label' => 'Tblphanhois', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblphanhoi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_phanhoi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_phanhoi], [
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
            'id_phanhoi',
            'hoten',
            'email:email',
            'sdt',
            'noidung',
            'id_user',
        ],
    ]) ?>

</div>
