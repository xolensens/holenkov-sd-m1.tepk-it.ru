<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workshop".
 *
 * @property int $id_workshop
 * @property int $workshop_type_id
 * @property string $name
 * @property int $count_of_workers
 *
 * @property ProductWorkshop[] $productWorkshops
 * @property WorkshopType $workshopType
 * @property WorkshopType $workshopType0
 */
class Workshop extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workshop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workshop_type_id', 'name', 'count_of_workers'], 'required'],
            [['workshop_type_id', 'count_of_workers'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['workshop_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => WorkshopType::class, 'targetAttribute' => ['workshop_type_id' => 'id_workshop_type']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_workshop' => 'Id Workshop',
            'workshop_type_id' => 'Workshop Type ID',
            'name' => 'Name',
            'count_of_workers' => 'Count Of Workers',
        ];
    }

    /**
     * Gets query for [[ProductWorkshops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductWorkshops()
    {
        return $this->hasMany(ProductWorkshop::class, ['workshop_id' => 'id_workshop']);
    }

    /**
     * Gets query for [[WorkshopType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshopType()
    {
        return $this->hasOne(WorkshopType::class, ['id_workshop_type' => 'workshop_type_id']);
    }

    /**
     * Gets query for [[WorkshopType0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshopType0()
    {
        return $this->hasOne(WorkshopType::class, ['id_workshop_type' => 'workshop_type_id']);
    }

}
