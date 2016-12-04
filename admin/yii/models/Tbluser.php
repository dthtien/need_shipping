<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbluser".
 *
 * @property integer $id_user
 * @property string $email
 * @property string $password
 * @property string $hoten
 * @property string $sdt
 * @property string $diachi
 * @property string $loai
 */
class Tbluser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbluser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'hoten', 'sdt', 'diachi', 'loai'], 'required'],
            [['email'], 'string', 'max' => 50],
            [['password', 'hoten'], 'string', 'max' => 20],
            [['sdt'], 'string', 'max' => 12],
            [['diachi'], 'string', 'max' => 200],
            [['loai'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'email' => 'Email',
            'password' => 'Password',
            'hoten' => 'Hoten',
            'sdt' => 'Sdt',
            'diachi' => 'Diachi',
            'loai' => 'Loai',
        ];
    }
}
