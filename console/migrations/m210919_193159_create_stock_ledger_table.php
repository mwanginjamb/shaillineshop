<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stock_ledger}}`.
 */
class m210919_193159_create_stock_ledger_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stock_ledger}}', [
            'id' => $this->primaryKey(),
            'stock_id' => $this->integer(),
            'quantity' => $this->integer(),
            'balance' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stock_ledger}}');
    }
}
