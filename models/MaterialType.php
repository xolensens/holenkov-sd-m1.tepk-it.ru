<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material_type".
 *
 * @property int $id_material_type
 * @property string $name_material
 * @property float $float_loss
 *
 * @property Product $materialType
 */
class MaterialType extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_material', 'float_loss'], 'required'],
            [['float_loss'], 'number'],
            [['name_material'], 'string', 'max' => 255],
            [['id_material_type'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_material_type' => 'material_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_material_type' => 'Id Material Type',
            'name_material' => 'Name Material',
            'float_loss' => 'Float Loss',
        ];
    }

    /**
     * Gets query for [[MaterialType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialType()
    {
        return $this->hasOne(Product::class, ['material_type_id' => 'id_material_type']);
    }

}
