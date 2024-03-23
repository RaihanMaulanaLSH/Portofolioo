<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "testi".
 *
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property string $gambar
 */
class Testi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi', 'gambar'], 'required'],
            [['nama', 'deskripsi'], 'string', 'max' => 255],
            ['gambar', 'file', 'extensions' => ['png', 'jpg', 'jpeg'], 'maxSize' => 1024 * 1024 * 5],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
        ];
    }
}
