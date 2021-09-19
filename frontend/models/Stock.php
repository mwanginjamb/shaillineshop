<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $id
 * @property string|null $stock
 * @property int|null $quantity
 * @property int|null $entry_date
 * @property bool|null $exhausted
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'entry_date', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['exhausted'], 'boolean'],
            [['stock'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stock' => Yii::t('app', 'Stock'),
            'quantity' => Yii::t('app', 'Quantity'),
            'entry_date' => Yii::t('app', 'Entry Date'),
            'exhausted' => Yii::t('app', 'Exhausted'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\StockQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\StockQuery(get_called_class());
    }
}
