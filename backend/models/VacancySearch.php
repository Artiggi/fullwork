<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vacancy;

/**
 * VacancySearch represents the model behind the search form about `app\models\Vacancy`.
 */
class VacancySearch extends Vacancy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'minprice', 'maxprice', 'employer_id', 'scope_id', 'skill_id', 'jobtime_id', 'city_id', 'mtop'], 'integer'],
            [['title', 'text', 'date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vacancy::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'minprice' => $this->minprice,
            'maxprice' => $this->maxprice,
            'employer_id' => $this->employer_id,
            'scope_id' => $this->scope_id,
            'skill_id' => $this->skill_id,
            'jobtime_id' => $this->jobtime_id,
            'city_id' => $this->city_id,
            'mtop' => $this->mtop,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
