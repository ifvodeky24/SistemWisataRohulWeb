<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_berita".
 *
 * @property int $id_berita
 * @property string $judul_berita
 * @property string $nama_pengarang
 * @property string $informasi
 * @property string $foto
 * @property string $createdAt
 * @property string $updatedAt
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_berita', 'nama_pengarang', 'informasi', 'foto'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['judul_berita', 'nama_pengarang', 'foto'], 'string', 'max' => 50],
            [['informasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul_berita' => 'Judul Berita',
            'nama_pengarang' => 'Nama Pengarang',
            'informasi' => 'Informasi',
            'foto' => 'Foto',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
