<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "stock_ledger".
 *
 * @property int $id
 * @property int|null $stock_id
 * @property int|null $quantity
 * @property int|null $balance
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class StockLedger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock_ledger';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['stock_id', 'required'],
            [['stock_id', 'quantity', 'balance', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stock_id' => Yii::t('app', 'Stock ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'balance' => Yii::t('app', 'Balance'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\StockLedgerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\StockLedgerQuery(get_called_class());
    }
}
