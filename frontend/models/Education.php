<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property integer $id
 * @property string $name
 * @property string $place
 * @property string $begDate
 * @property string $endDate
 *
 * @property ProfEduc[] $profEducs
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place'], 'required'],
            [['name', 'place', 'begDate', 'endDate'], 'string', 'max' => 255],
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
            'place' => 'Place',
            'begDate' => 'Beg Date',
            'endDate' => 'End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfEducs()
    {
        return $this->hasMany(ProfEduc::className(), ['educ_id' => 'id']);
    }
}
