<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "sale".
 *
 * @property int $id
 * @property int|null $customer_id
 * @property string|null $uom
 * @property int|null $quantity
 * @property float|null $price
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $sale_type_id
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'quantity', 'sale_type_id'], 'required'],
            [['customer_id', 'quantity', 'created_at', 'updated_at', 'created_by', 'updated_by', 'sale_type_id'], 'integer'],
            [['price'], 'number'],
            [['uom'], 'string', 'max' => 255],
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
            'customer_id' => Yii::t('app', 'Customer ID'),
            'uom' => Yii::t('app', 'Uom'),
            'quantity' => Yii::t('app', 'Quantity'),
            'price' => Yii::t('app', 'Price'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'sale_type_id' => Yii::t('app', 'Sale Type ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\SaleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\SaleQuery(get_called_class());
    }

    public function getCustomer() {
        return $this->hasOne(Customer::className(),['id' => 'customer_id']);
    }
}
