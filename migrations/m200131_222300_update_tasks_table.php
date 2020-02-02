<?php

use yii\db\Migration;

/**
 * Class m200131_222300_update_tasks_table
 */
class m200131_222300_update_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200131_222300_update_tasks_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200131_222300_update_tasks_table cannot be reverted.\n";

        return false;
    }
    */
}
