<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shop;

/**
 * ShopSearch represents the model behind the search form of `app\models\Shop`.
 */
class ShopSearch extends Shop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_shop'], 'integer'],
            [['ho_ten_chu_shop', 'so_dt_shop', 'dia_chi_shop'], 'safe'],
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
        $query = Shop::find();

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
            'id_shop' => $this->id_shop,
        ]);

        $query->andFilterWhere(['like', 'ho_ten_chu_shop', $this->ho_ten_chu_shop])
            ->andFilterWhere(['like', 'so_dt_shop', $this->so_dt_shop])
            ->andFilterWhere(['like', 'dia_chi_shop', $this->dia_chi_shop]);

        return $dataProvider;
    }
}
