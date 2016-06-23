<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "scope".
 *
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
            [['scope'], 'required'],
            [['scope'], 'string', 'max' => 255],
        ];
    }

    public function getVacancys()
    {
        return $this->hasMany(Vacancy::className(), ['id' => 'scope_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scope' => 'Scope',
        ];
    }
}
