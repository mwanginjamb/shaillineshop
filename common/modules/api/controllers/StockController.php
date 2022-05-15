<?php

/**
 * Created by PhpStorm.
 * User: HP ELITEBOOK 840 G5
 * Date: 9/19/2021
 * Time: 1:38 PM
 */

namespace common\modules\api\controllers;


use app\models\Customer;
use app\models\SaleType;
use app\models\Stock;
use yii\filters\Cors;
use yii\rest\ActiveController;

class StockController extends ActiveController
{
    public $modelClass = Stock::class;

    public function behaviors()
    {
        $behaviours =  parent::behaviors(); // TODO: Change the autogenerated stub

        // Add cors support

        $behaviours['cors'] = [
            'class' => Cors::class,
            'cors' => [
                // restrict access to
                'Access-Control-Allow-Origin' => ['*'],
                //  methods to allow
                'Access-Control-Request-Method' => ['POST', 'PUT', 'GET', 'DELETE'],
                // Allow only headers 'X-Wsse'
                'Access-Control-Request-Headers' => ['*'],
                // Allow credentials (cookies, authorization headers, etc.) to be exposed to the browser
                'Access-Control-Allow-Credentials' => false,
                // Allow OPTIONS caching
                'Access-Control-Max-Age' => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],
        ];

        return $behaviours;
    }
}
