<?php
/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 11/29/2021
 * Time: 2:22 AM
 */

namespace common\modules\api\resources;


use app\models\StockLedger;

class StockLedgerResource extends StockLedger
{
    public function extraFields()
    {
        return ['stock'];
    }
}