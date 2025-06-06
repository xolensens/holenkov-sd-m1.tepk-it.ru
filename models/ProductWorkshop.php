<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_workshop".
 *
 * @property int $id_product_workshop
 * @property int $product_id
 * @property int $workshop_id
 * @property float $hours
 *
 * @property Product $product
 * @property Workshop $workshop
 */
class ProductWorkshop extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_workshop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'workshop_id', 'hours'], 'required'],
            [['product_id', 'workshop_id'], 'integer'],
            [['hours'], 'number'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id_product']],
            [['workshop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Workshop::class, 'targetAttribute' => ['workshop_id' => 'id_workshop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_product_workshop' => 'Id Product Workshop',
            'product_id' => 'Product ID',
            'workshop_id' => 'Workshop ID',
            'hours' => 'Hours',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id_product' => 'product_id']);
    }

    /**
     * Gets query for [[Workshop]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshop()
    {
        return $this->hasOne(Workshop::class, ['id_workshop' => 'workshop_id']);
    }

}
