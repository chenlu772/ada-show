<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visitor;

/**
 * VisitorSearch represents the model behind the search form about `backend\models\Visitor`.
 */
class VisitorSearch extends Visitor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'occupation', 'mobile', 'create_time'], 'integer'],
            [['true_name', 'email'], 'safe'],
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
        $query = Visitor::find();

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
            'user_id' => $this->user_id,
            'mobile' => $this->mobile,
        ]);

        if($this->occupation){
            $query->andFilterWhere(['occupation' => $this->occupation]);
        }

        $query->andFilterWhere(['like', 'true_name', $this->true_name])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
