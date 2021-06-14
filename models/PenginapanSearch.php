<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penginapan;

/**
 * PenginapanSearch represents the model behind the search form of `app\models\Penginapan`.
 */
class PenginapanSearch extends Penginapan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penginapan'], 'integer'],
            [['nama_penginapan', 'alamat', 'pemilik', 'foto', 'informasi', 'createdAt', 'updatedAt'], 'safe'],
            [['latitude', 'longitude'], 'number'],
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
        $query = Penginapan::find();

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
            'id_penginapan' => $this->id_penginapan,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'nama_penginapan', $this->nama_penginapan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pemilik', $this->pemilik])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'informasi', $this->informasi]);

        return $dataProvider;
    }
}
