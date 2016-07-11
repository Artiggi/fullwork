<?php

namespace frontend\models;
use sjaakp\taggable\TagBehavior;
use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $name
 * @property integer $count
 *
 * @property VacTags[] $vacTags
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['count'], 'integer'],
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
            'count' => 'Count',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacTags()
    {
        return $this->hasMany(VacTags::className(), ['tag_id' => 'id']);
    }

    public function getVacancys() {
        return $this->hasMany(Vacancy::className(), [ 'id' => 'model_id' ])
            ->viaTable('vac_tags', [ 'tag_id' => 'id' ]);
    }

    public function behaviors()
    {
        return [
            'tag' => [
                'class' => TagBehavior::className(),
                'junctionTable' => 'vac_tags',
            ]
        ];
    }
}
