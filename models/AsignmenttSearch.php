<?php

namespace kouosl\assignment\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\assignment\models\Assignment;

/**
 * AssignmentSearch represents the model behind the search form of `kouosl\assignment\models\Assignment`.
 */
class AssignmentSearch extends Assignment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author'], 'integer'],
            [['title', 'teacher', 'student', 'lesson', 'content', 'status', 'date', 'createdate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Assignment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'author' => $this->author,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'student', $this->student])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
