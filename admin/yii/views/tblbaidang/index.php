<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblbaidangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tblbaidangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblbaidang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tblbaidang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_baidang',
            'diachishop',
            'sdtshop',
            'diachinguoinhan',
            'sdtnguoinhan',
            // 'ghichu:ntext',
            // 'tenmathang',
            // 'cannang',
            // 'tienung',
            // 'phiship',
            // 'id_shop',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
