<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Daftarpeer;

/**
 * DaftarpeerSearch represents the model behind the search form of `app\models\Daftarpeer`.
 */
class DaftarpeerSearch extends Daftarpeer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TugasKe'], 'integer'],
            [['NamaMatkul', 'Tugas', 'Deadline'], 'safe'],
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
        $query = Daftarpeer::find();

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
            'TugasKe' => $this->TugasKe,
        ]);

        $query->andFilterWhere(['like', 'NamaMatkul', $this->NamaMatkul])
            ->andFilterWhere(['like', 'Tugas', $this->Tugas])
            ->andFilterWhere(['like', 'Deadline', $this->Deadline]);

        return $dataProvider;
    }
}
