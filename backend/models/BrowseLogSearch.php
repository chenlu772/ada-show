<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BrowseLog;
use yii\helpers\StringHelper;

/**
 * BrowseLogSearch represents the model behind the search form about `backend\models\BrowseLog`.
 */
class BrowseLogSearch extends BrowseLog
{
    public $create_time_b;
    public $create_time_e;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'remote_port', 'create_time'], 'integer'],
            [['page_url', 'page_referrer', 'browser', 'user_ip'], 'safe'],
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
        $query = BrowseLog::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        $this->create_time_b = !empty($params['BrowseLogSearch']['create_time_b'])?$params['BrowseLogSearch']['create_time_b']:'';
        $this->create_time_e = !empty($params['BrowseLogSearch']['create_time_e'])?$params['BrowseLogSearch']['create_time_e']:'';


        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'remote_port' => $this->remote_port,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'page_url', $this->page_url])
            ->andFilterWhere(['like', 'page_referrer', $this->page_referrer])
            ->andFilterWhere(['like', 'browser', $this->browser])
            ->andFilterWhere(['like', 'user_ip', $this->user_ip]);

        if(!empty($this->create_time_b)){
            $query->andFilterWhere(['>=', 'create_time', date('Ymd', strtotime($this->create_time_b)).'000000']);
        }
        if(!empty($this->create_time_e)){
            $query->andFilterWhere(['<=', 'create_time', date('Ymd', strtotime($this->create_time_e)).'235959']);
        }

        return $dataProvider;
    }
}
