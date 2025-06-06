<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductType;

/**
 * ProductTypeSearch represents the model behind the search form of `app\models\ProductType`.
 */
class ProductTypeSearch extends ProductType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_product_type'], 'integer'],
            [['name_type'], 'safe'],
            [['coefficient'], 'number'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = ProductType::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_product_type' => $this->id_product_type,
            'coefficient' => $this->coefficient,
        ]);

        $query->andFilterWhere(['like', 'name_type', $this->name_type]);

        return $dataProvider;
    }
}
