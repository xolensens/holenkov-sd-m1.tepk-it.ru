<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_type".
 *
 * @property int $id_product_type
 * @property string $name_type
 * @property float $coefficient
 *
 * @property Product $productType
 */
class ProductType extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_type', 'coefficient'], 'required'],
            [['coefficient'], 'number'],
            [['name_type'], 'string', 'max' => 255],
            [['id_product_type'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_product_type' => 'product_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_product_type' => 'Id Product Type',
            'name_type' => 'Name Type',
            'coefficient' => 'Coefficient',
        ];
    }

    /**
     * Gets query for [[ProductType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductType()
    {
        return $this->hasOne(Product::class, ['product_type_id' => 'id_product_type']);
    }

}
