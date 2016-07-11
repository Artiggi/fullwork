<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vac_tags".
 *
 * @property integer $vacancy_id
 * @property integer $tag_id
 * @property integer $ord
 *
 * @property Tag $tag
 * @property Vacancy $vacancy
 */
class VacTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vac_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'tag_id'], 'required'],
            [['model_id', 'tag_id', 'ord'], 'integer'],
            [['tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tag_id' => 'id']],
            [['model_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vacancy::className(), 'targetAttribute' => ['model_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'model_id' => 'model ID',
            'tag_id' => 'Tag ID',
            'ord' => 'Ord',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancys()
    {
        return $this->hasMany(Vacancy::className(), ['id' => 'model_id']);
    }
}
