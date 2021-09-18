<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sale_type}}`.
 */
class m210918_140658_create_sale_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sale_type}}', [
            'id' => $this->primaryKey(),
            'sale' => $this->string(15),
            'enabled' => $this->boolean(),
            'created_at' => $this->integer(20),
            'updated_at' => $this->integer(20),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sale_type}}');
    }
}
