<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Sale]].
 *
 * @see \app\models\Sale
 */
class SaleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Sale[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Sale|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
