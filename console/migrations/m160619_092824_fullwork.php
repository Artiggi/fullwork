<?php

use yii\db\Schema;
use yii\db\Migration;

class m160619_092824_fullwork extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%vacancy}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'text' => Schema::TYPE_TEXT . ' NOT NULL',
            'date' => Schema::TYPE_DATE . ' NOT NULL',
            'minprice' => Schema::TYPE_INTEGER,
            'maxprice' => Schema::TYPE_INTEGER,
            'employer_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'scope_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'skill_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'jobtime_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'city_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%scope}}', [
            'id' => Schema::TYPE_PK,
            'scope' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%skill}}', [
            'id' => Schema::TYPE_PK,
            'skill' => Schema::TYPE_STRING . ' NOT NULL',
            'vacancy_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%jobtime}}', [
            'id' => Schema::TYPE_PK,
            'jobtime' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%city}}', [
            'id' => Schema::TYPE_PK,
            'city' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%vacancy}}');
        $this->dropTable('{{%scope}}');
        $this->dropTable('{{%skill}}');
        $this->dropTable('{{%jobtime}}');
        $this->dropTable('{{%city}}');

        //$this->dropTable('{{%}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }

    Создание без схемы

    $this->createTable('vacancy', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'text' => $this->text(),
            'date' => $this->date(),
            'minprice' => $this->integer(),
            'maxprice' => $this->integer(),
            'employer_id' => $this->integer(),
            'scope_id' => $this->integer(),
            'skill_id' => $this->integer(),
            'jobtime_id' => $this->integer(),
            'city_id' => $this->integer(),
        ]);


    */
}
