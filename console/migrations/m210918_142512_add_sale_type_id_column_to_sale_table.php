<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%sale}}`.
 */
class m210918_142512_add_sale_type_id_column_to_sale_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%sale}}', 'sale_type_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%sale}}', 'sale_type_id');
    }
}
