<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $id
 * @property string $city
 * @property string $location
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['city'], 'string', 'max' => 255],
            [['location'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'location' => 'Location',
        ];
    }
}
