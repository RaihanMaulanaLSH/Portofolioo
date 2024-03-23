<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $deskripsi
 * @property string $quotes
 * @property string $gambar
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi', 'quotes', 'gambar'], 'required'],
            [['deskripsi', 'quotes'], 'string', 'max' => 255],
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
            'deskripsi' => 'Deskripsi',
            'quotes' => 'Quotes',
            'gambar' => 'Gambar',
        ];
    }


}
