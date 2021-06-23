<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_travel".
 *
 * @property int $id_travel
 * @property string $nama_travel
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
class Travel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_travel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_travel',  'kelurahan', 'kecamatan', 'alamat', 'latitude', 'longitude', 'foto', 'informasi'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_travel', 'kelurahan', 'kecamatan', 'alamat', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_travel' => 'Id Travel',
            'nama_travel' => 'Nama Travel',
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
