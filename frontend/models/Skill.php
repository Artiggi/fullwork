<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
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
            [['skill', 'vacancy_id'], 'required'],
            [['vacancy_id'], 'integer'],
            [['skill'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'skill' => 'Skill',
            'vacancy_id' => 'Vacancy ID',
        ];
    }
}
