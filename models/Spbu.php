<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_spbu".
 *
 * @property int $id_spbu
 * @property string $nama_spbu
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
class Spbu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_spbu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_spbu', 'alamat', 'kelurahan', 'kecamatan', 'latitude', 'longitude', 'informasi', 'foto'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_spbu', 'alamat', 'kelurahan', 'kecamatan', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_spbu' => 'Id Spbu',
            'nama_spbu' => 'Nama Spbu',
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
