<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblphanhoi".
 *
 * @property integer $id_phanhoi
 * @property string $hoten
 * @property string $email
 * @property string $sdt
 * @property string $noidung
 * @property integer $id_user
 */
class Tblphanhoi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblphanhoi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoten', 'email', 'sdt', 'noidung', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['hoten'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
            [['sdt'], 'string', 'max' => 12],
            [['noidung'], 'string', 'max' => 200],
            [['id_phanhoi'], 'exist', 'skipOnError' => true, 'targetClass' => Tbluser::className(), 'targetAttribute' => ['id_phanhoi' => 'id_user']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_phanhoi' => 'Id Phanhoi',
            'hoten' => 'Hoten',
            'email' => 'Email',
            'sdt' => 'Sdt',
            'noidung' => 'Noidung',
            'id_user' => 'Id User',
        ];
    }
}
<?php 
    include 'data_access_helper.php'
    //get information
    $name =$_GET["name"];
    $phone =$_GET["phone"];
    $email =$_GET["email"];
    $content=$_GET["content"];
    //insert to database
    $db=new DataAccessHelper;
    $db->connect();
    $db->executeNonQuery("INSERT INTO tblphanhoi(name,phone,email,content) VALUE('$name',$phone',$email','$content')");
    $db->close();
?>
