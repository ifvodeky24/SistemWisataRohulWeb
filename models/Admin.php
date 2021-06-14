<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $password
 * @property string $nama_lengkap
 * @property string $authKey
 * @property string $accessToken
 * @property string $foto
 * @property string $createdAt
 * @property string $updatedAt
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_lengkap', 'authKey', 'accessToken', 'foto'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['username', 'nama_lengkap', 'foto'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
            [['authKey', 'accessToken'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'password' => 'Password',
            'nama_lengkap' => 'Nama Lengkap',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'foto' => 'Foto',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
