<?php

use yii\db\Migration;

class m160620_035320_upVac extends Migration
{
    public function up()
    {
        //$this->addColumn('vacancy', 'mtop', $this->integer());
    }

    public function down()
    {
        $this->dropColumn ('vacancy', 'mtop');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
