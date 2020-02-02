<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%status}}`.
 */
class m200122_113122_create_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('status', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50),
            'description' => $this->string(50)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('status');
    }
}
