<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jobtime".
 * Тип занятости
 * @property integer $id
 * @property string $jobtime
 */
class Jobtime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobtime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'name',
        ];
    }
}
