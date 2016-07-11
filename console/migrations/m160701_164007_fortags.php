<?php

use yii\db\Schema;
use yii\db\Migration;

class m160701_164007_fortags extends Migration
{
    public function up()
    {
        $this->createTable('{{%tag}}', [
        'id' => Schema::TYPE_PK,
        'name' => Schema::TYPE_STRING . ' NOT NULL',
        'count' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
        ]);
        $this->createTable('{{%vac_tags}}', [
        'vacancy_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'tag_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        'ord' => Schema::TYPE_INTEGER . ' DEFAULT 0',
        ]);
    }

    public function down()
    {
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
