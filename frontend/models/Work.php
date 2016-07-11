<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property integer $id
 * @property string $place
 * @property string $position
 * @property string $begDate
 * @property string $endDate
 *
 * @property ProfWork[] $profWorks
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place', 'position'], 'required'],
            [['place', 'position', 'begDate', 'endDate'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place' => 'Place',
            'position' => 'Position',
            'begDate' => 'Beg Date',
            'endDate' => 'End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfWorks()
    {
        return $this->hasMany(ProfWork::className(), ['work_id' => 'id']);
    }
}
