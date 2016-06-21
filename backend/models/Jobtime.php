<?php

namespace app\models;

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
            [['jobtime'], 'required'],
            [['jobtime'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jobtime' => 'Jobtime',
        ];
    }
}
