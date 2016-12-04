<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tblbaidang;

/**
 * TblbaidangSearch represents the model behind the search form of `app\models\Tblbaidang`.
 */
class TblbaidangSearch extends Tblbaidang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_baidang', 'cannang', 'id_shop'], 'integer'],
            [['diachishop', 'sdtshop', 'diachinguoinhan', 'sdtnguoinhan', 'ghichu', 'tenmathang'], 'safe'],
            [['tienung', 'phiship'], 'number'],
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
        $query = Tblbaidang::find();

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
            'id_baidang' => $this->id_baidang,
            'cannang' => $this->cannang,
            'tienung' => $this->tienung,
            'phiship' => $this->phiship,
            'id_shop' => $this->id_shop,
        ]);

        $query->andFilterWhere(['like', 'diachishop', $this->diachishop])
            ->andFilterWhere(['like', 'sdtshop', $this->sdtshop])
            ->andFilterWhere(['like', 'diachinguoinhan', $this->diachinguoinhan])
            ->andFilterWhere(['like', 'sdtnguoinhan', $this->sdtnguoinhan])
            ->andFilterWhere(['like', 'ghichu', $this->ghichu])
            ->andFilterWhere(['like', 'tenmathang', $this->tenmathang]);

        return $dataProvider;
    }
}
