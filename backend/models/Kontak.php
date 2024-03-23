<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $id
 * @property string $alamat
 * @property int $nohp
 * @property string $email
 * @property string $sosmed
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alamat', 'nohp', 'email', 'sosmed'], 'required'],
            [['alamat', 'email', 'sosmed','nohp'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alamat' => 'Alamat',
            'nohp' => 'Nohp',
            'email' => 'Email',
            'sosmed' => 'Sosmed',
        ];
    }
}
