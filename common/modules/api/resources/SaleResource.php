<?php
namespace common\modules\api\resources;
/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 10/7/2021
 * Time: 4:39 PM
 */
class SaleResource extends \app\models\Sale
{
    public function extraFields()
    {
        return ['customer']; // TODO: Change the autogenerated stub
    }
}