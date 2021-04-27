<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "urls".
 *
 * @property int $id
 * @property string $url
 * @property string $img
 * @property string $text
 */
class Urls extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'img', 'text'], 'required'],
            [['url', 'img', 'text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'img' => 'Img',
            'text' => 'Text',
        ];
    }
}
