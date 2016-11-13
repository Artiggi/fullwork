<?php

namespace backend\models;

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
            [['title', 'text', 'date', 'employer_id', 'scope_id', 'skill_id', 'jobtime_id', 'city_id'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['minprice', 'maxprice', 'employer_id', 'scope_id', 'skill_id', 'jobtime_id', 'city_id', 'mtop'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст вакансии',
            'date' => 'Дата подачи',
            'minprice' => 'Мин зп',
            'maxprice' => 'Макс зп',
            'employer_id' => 'Заказчик',
            'scope_id' => 'Сфера деятельности',
            'skill_id' => 'Навыки',
            'jobtime_id' => 'Вид занятости',
            'city_id' => 'Город',
            'mtop' => 'Премиум',
        ];
    }

    public function getScope()
    {
        return $this->hasOne(Scope::className(), ['id' => 'scope_id']);
    }

    public function getScopeValue()
    {
        return $this->scope->name;
    }

    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    public function getCityValue()
    {
        return $this->city->city;
    }

    public function getJobtime()
    {
        return $this->hasOne(Jobtime::className(), ['id' => 'jobtime_id']);
    }

    public function getJobtimeValue()
    {
        return $this->jobtime->name;
    }

    public function getSkills()
    {
        return $this->hasMany(Skill::className(), ['vacancy_id' => 'id']);
    }


}
