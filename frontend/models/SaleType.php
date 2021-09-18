<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sale_type".
 *
 * @property int $id
 * @property string|null $sale
 * @property bool|null $enabled
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class SaleType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enabled'], 'boolean'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['sale'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sale' => Yii::t('app', 'Sale'),
            'enabled' => Yii::t('app', 'Enabled'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\SaleTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\SaleTypeQuery(get_called_class());
    }
}
