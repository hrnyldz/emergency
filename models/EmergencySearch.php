<?php
namespace kouosl\emergency\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\emergency\models\Emergency;
/**
 * EmergencySearch represents the model behind the search form about `kouosl\emergency\models\Emergency`.
 */
class EmergencySearch extends Emergency
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TCKNO'], 'integer'],
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
        $query = Emergency::find();
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
            'TCKNO' => $this->TCKNO,
        ]);
        return $dataProvider;
    }
}
