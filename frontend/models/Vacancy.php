<?php

namespace frontend\models;
use sjaakp\taggable\TaggableBehavior;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $date
 * @property integer $minprice
 * @property integer $maxprice
 * @property integer $employer_id
 * @property integer $scope_id
 * @property integer $skill_id
 * @property integer $jobtime_id
 * @property integer $city_id
 * @property integer $mtop
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'date', 'employer_id', 'scope_id', 'jobtime_id', 'city_id'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['minprice', 'maxprice', 'employer_id',  'jobtime_id', 'city_id', 'mtop'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['editorTags'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    
    public function getScope()
    {
        return $this->hasOne(Scope::className(), ['scope_id' => 'id']);
    }    

    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['city_id' => 'id']);
    }   

    public function getVacTags()
    {
        return $this->hasMany(VacTags::className(), ['model_id' => 'id']);
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'date' => 'Date',
            'minprice' => 'Minprice',
            'maxprice' => 'Maxprice',
            'employer_id' => 'Employer ID',
            'scope_id' => 'Scope ID',
            'skill_id' => 'Skill ID',
            'jobtime_id' => 'Jobtime ID',
            'city_id' => 'City ID',
            'mtop' => 'Mtop',
        ];
    }


    public function behaviors()
    {
        return [
            'taggable' => [
                'class' => TaggableBehavior::className(),
                'tagClass' => Tag::className(),
                'junctionTable' => 'vac_tags',
            ]
        ];
    }


}
