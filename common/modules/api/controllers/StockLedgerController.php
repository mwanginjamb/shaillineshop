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
use app\models\StockLedger;
use common\modules\api\resources\StockLedgerResource;
use yii\filters\Cors;
use yii\rest\ActiveController;

class StockLedgerController extends ActiveController
{
    public $modelClass = StockLedgerResource::class;

    public function behaviors()
    {
        $behaviours =  parent::behaviors(); // TODO: Change the autogenerated stub

        // Add cors support

        $behaviours['cors'] = [
            'class' => Cors::class,
            'cors' => [
                // restrict access to
                'Origin' => ['capacitor://161.97.88.127', 'capacitor://localhost', 'http://localhost', 'http://192.168.1.118', 'ionic://localhost'],
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
