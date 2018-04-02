<?php

use yii\db\Migration;

/**
 * Class m180401_182634_users
 */
class m180401_182634_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->createTable('users',[
            'id' => $this->primaryKey(),
            'login' => $this->text(),
            'password' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        echo "m180401_182634_users cannot be reverted.\n";
//
//        return false;
        return $this->dropTable();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180401_182634_users cannot be reverted.\n";

        return false;
    }
    */
}
