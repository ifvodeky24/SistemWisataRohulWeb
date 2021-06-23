<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_wisata".
 *
 * @property int $id_wisata
 * @property string $nama_wisata
 * @property string $kategori
 * @property string $alamat
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $foto
 * @property string $informasi
 * @property float $latitude
 * @property float $longitude
 * @property string $createdAt
 * @property string $updatedAt
 */
class Wisata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_wisata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_wisata', 'kategori', 'alamat', 'kelurahan', 'kecamatan', 'foto', 'latitude', 'longitude', 'informasi'], 'required'],
            [['kategori'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['nama_wisata', 'alamat', 'kelurahan', 'kecamatan', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wisata' => 'Id Wisata',
            'nama_wisata' => 'Nama Wisata',
            'kategori' => 'Kategori',
            'alamat' => 'Alamat',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'foto' => 'Foto',
            'informasi' => 'Informasi',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
