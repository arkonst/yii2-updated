<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m200121_120210_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string(),
            'created_by_id' => $this->integer(),
            'responsible_id' => $this->integer(),
            'deadline' => $this->date(),
            'status_id' => $this->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }
}
