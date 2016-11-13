<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "skill".
 * Необходимые навыки
 * @property integer $id
 * @property string $skill
 * @property integer $vacancy_id
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'vacancy_id'], 'required'],
            [['vacancy_id'], 'integer'],
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
            'name' => 'Name',
            'vacancy_id' => 'Vacancy ID',
        ];
    }
}
