<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property integer $basicSpec
 * @property integer $addSpec
 * @property string $skills
 * @property string $avatarUrl
 * @property integer $company_id
 *
 * @property ProfEduc[] $profEducs
 * @property ProfWork[] $profWorks
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'basicSpec', 'avatarUrl'], 'required'],
            [['basicSpec', 'addSpec', 'company_id'], 'integer'],
            [['skills'], 'string'],
            [['firstName', 'lastName', 'avatarUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'basicSpec' => 'Basic Spec',
            'addSpec' => 'Add Spec',
            'skills' => 'Skills',
            'avatarUrl' => 'Avatar Url',
            'company_id' => 'Company ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfEducs()
    {
        return $this->hasMany(ProfEduc::className(), ['prof_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfWorks()
    {
        return $this->hasMany(ProfWork::className(), ['prof_id' => 'id']);
    }
}
