<?php

use yii\db\Migration;

/**
 * Class m200917_174848_defi
 */
class m200917_174848_defi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('categories', array('Name' => 'DeFi Financing') );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200917_174848_defi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200917_174848_defi cannot be reverted.\n";

        return false;
    }
    */
}
