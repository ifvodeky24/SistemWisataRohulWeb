<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_masjid".
 *
 * @property int $id_masjid
 * @property string $nama_masjid
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
class Masjid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_masjid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_masjid', 'alamat', 'kelurahan', 'kecamatan', 'latitude', 'longitude', 'foto', 'informasi'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_masjid', 'alamat', 'kelurahan', 'kecamatan', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_masjid' => 'Id Masjid',
            'nama_masjid' => 'Nama Masjid',
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
