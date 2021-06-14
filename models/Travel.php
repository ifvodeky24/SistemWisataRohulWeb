<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_travel".
 *
 * @property int $id_travel
 * @property string $nama_travel
 * @property string $pemilik
 * @property string $alamat
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
            [['nama_travel', 'pemilik', 'alamat', 'latitude', 'longitude', 'foto', 'informasi'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_travel', 'pemilik', 'alamat', 'foto'], 'string', 'max' => 50],
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
            'pemilik' => 'Pemilik',
            'alamat' => 'Alamat',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'foto' => 'Foto',
            'informasi' => 'Informasi',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
