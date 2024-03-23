<?php

use yii\db\Migration;

/**
 * Class m240224_071704_add_default_user_data
 */
class m240224_071704_add_default_user_data extends Migration
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
        echo "m240224_071704_add_default_user_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240224_071704_add_default_user_data cannot be reverted.\n";

        return false;
    }
    */
}
