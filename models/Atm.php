<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_atm".
 *
 * @property int $id_atm
 * @property string $nama_atm
 * @property string $alamat
 * @property string $kelurahan
 * @property string $kecamatan
 * @property float $latitude
 * @property float $longitude
 * @property string $foto
 * @property string $informasi
 * @property string $createdAt
 * @property string $updatedAt
 */
class Atm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_atm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_atm', 'alamat', 'kelurahan', 'kecamatan', 'latitude', 'longitude', 'informasi', 'foto'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_atm', 'alamat', 'kelurahan', 'kecamatan', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_atm' => 'Id Atm',
            'nama_atm' => 'Nama Atm',
            'alamat' => 'Alamat',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'foto' => 'Foto',
            'informasi' => 'Informasi',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
