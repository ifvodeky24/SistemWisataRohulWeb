<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_penginapan".
 *
 * @property int $id_penginapan
 * @property string $nama_penginapan
 * @property string $alamat
 * @property string $pemilik
 * @property float $latitude
 * @property float $longitude
 * @property string $foto
 * @property string $informasi
 * @property string $createdAt
 * @property string $updatedAt
 */
class Penginapan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_penginapan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_penginapan', 'alamat', 'pemilik', 'latitude', 'longitude', 'foto', 'informasi'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_penginapan', 'alamat', 'pemilik', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penginapan' => 'Id Penginapan',
            'nama_penginapan' => 'Nama Penginapan',
            'alamat' => 'Alamat',
            'pemilik' => 'Pemilik',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'foto' => 'Foto',
            'informasi' => 'Informasi',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
