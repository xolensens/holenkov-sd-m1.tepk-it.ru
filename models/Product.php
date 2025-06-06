<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id_product
 * @property int $product_type_id
 * @property int $material_type_id
 * @property string $name
 * @property string $article
 * @property float $min_partner_price
 *
 * @property MaterialType $materialType
 * @property ProductType $productType
 * @property ProductWorkshop[] $productWorkshops
 */
class Product extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_type_id', 'material_type_id', 'name', 'article', 'min_partner_price'], 'required'],
            [['product_type_id', 'material_type_id'], 'integer'],
            [['min_partner_price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['article'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_product' => 'Id Product',
            'product_type_id' => 'Product Type ID',
            'material_type_id' => 'Material Type ID',
            'name' => 'Name',
            'article' => 'Article',
            'min_partner_price' => 'Min Partner Price',
        ];
    }

    /**
     * Gets query for [[MaterialType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialType()
    {
        return $this->hasOne(MaterialType::class, ['id_material_type' => 'material_type_id']);
    }

    /**
     * Gets query for [[ProductType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductType()
    {
        return $this->hasOne(ProductType::class, ['id_product_type' => 'product_type_id']);
    }

    /**
     * Gets query for [[ProductWorkshops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductWorkshops()
    {
        return $this->hasMany(ProductWorkshop::class, ['product_id' => 'id_product']);
    }


}
