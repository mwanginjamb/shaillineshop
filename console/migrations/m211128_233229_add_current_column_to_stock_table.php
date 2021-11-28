<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%stock}}`.
 */
class m211128_233229_add_current_column_to_stock_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%stock}}', 'current', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%stock}}', 'current');
    }
}
