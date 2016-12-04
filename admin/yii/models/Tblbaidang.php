<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblbaidang".
 *
 * @property integer $id_baidang
 * @property string $diachishop
 * @property string $sdtshop
 * @property string $diachinguoinhan
 * @property string $sdtnguoinhan
 * @property string $ghichu
 * @property string $tenmathang
 * @property integer $cannang
 * @property double $tienung
 * @property double $phiship
 * @property integer $id_shop
 */
class Tblbaidang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblbaidang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diachishop', 'sdtshop', 'diachinguoinhan', 'sdtnguoinhan', 'ghichu', 'tenmathang', 'cannang', 'tienung', 'phiship', 'id_shop'], 'required'],
            [['ghichu'], 'string'],
            [['cannang', 'id_shop'], 'integer'],
            [['tienung', 'phiship'], 'number'],
            [['diachishop', 'diachinguoinhan'], 'string', 'max' => 200],
            [['sdtshop', 'sdtnguoinhan'], 'string', 'max' => 12],
            [['tenmathang'], 'string', 'max' => 100],
            [['id_baidang'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['id_baidang' => 'id_shop']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_baidang' => 'Id Baidang',
            'diachishop' => 'Diachishop',
            'sdtshop' => 'Sdtshop',
            'diachinguoinhan' => 'Diachinguoinhan',
            'sdtnguoinhan' => 'Sdtnguoinhan',
            'ghichu' => 'Ghichu',
            'tenmathang' => 'Tenmathang',
            'cannang' => 'Cannang',
            'tienung' => 'Tienung',
            'phiship' => 'Phiship',
            'id_shop' => 'Id Shop',
        ];
    }
}
