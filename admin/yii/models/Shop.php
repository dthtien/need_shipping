<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id_shop
 * @property string $ho_ten_chu_shop
 * @property string $so_dt_shop
 * @property string $dia_chi_shop
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ho_ten_chu_shop', 'so_dt_shop', 'dia_chi_shop'], 'required'],
            [['ho_ten_chu_shop'], 'string', 'max' => 25],
            [['so_dt_shop'], 'string', 'max' => 11],
            [['dia_chi_shop'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_shop' => 'Id Shop',
            'ho_ten_chu_shop' => 'Ho Ten Chu Shop',
            'so_dt_shop' => 'So Dt Shop',
            'dia_chi_shop' => 'Dia Chi Shop',
        ];
    }
}
