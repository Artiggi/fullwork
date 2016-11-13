<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "scope".
 * Сфера деятельности (справочник)
 * @property integer $id
 * @property string $scope
 */
class Scope extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scope';
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
