<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi'], 'required'],
            [['nama', 'deskripsi'], 'string', 'max' => 500],
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
        ];
    }
}
