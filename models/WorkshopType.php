<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workshop_type".
 *
 * @property int $id_workshop_type
 * @property string $category
 *
 * @property Workshop $workshopType
 * @property Workshop[] $workshops
 */
class WorkshopType extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workshop_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category'], 'string', 'max' => 255],
            [['id_workshop_type'], 'exist', 'skipOnError' => true, 'targetClass' => Workshop::class, 'targetAttribute' => ['id_workshop_type' => 'workshop_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_workshop_type' => 'Id Workshop Type',
            'category' => 'Category',
        ];
    }

    /**
     * Gets query for [[WorkshopType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshopType()
    {
        return $this->hasOne(Workshop::class, ['workshop_type_id' => 'id_workshop_type']);
    }

    /**
     * Gets query for [[Workshops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshops()
    {
        return $this->hasMany(Workshop::class, ['workshop_type_id' => 'id_workshop_type']);
    }

}
