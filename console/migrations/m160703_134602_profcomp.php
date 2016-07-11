<?php

use yii\db\Migration;
use yii\db\Schema;

class m160703_134602_profcomp extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%profile}}',[
            'id' => Schema::TYPE_PK,
            'firstName' => Schema::TYPE_STRING . ' NOT NULL',
            'lastName' => Schema::TYPE_STRING . ' NOT NULL',         
            'basicSpec' => Schema::TYPE_INTEGER . ' NOT NULL',
            'addSpec' => Schema::TYPE_INTEGER,
            'skills' => Schema::TYPE_TEXT,
            'avatarUrl' => Schema::TYPE_STRING . ' NOT NULL',
            'company_id' => Schema::TYPE_INTEGER,
            ]);

        $this->createTable('{{%education}}',[
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,                              //образование (высшее, среднее, школа)
            'place' => Schema::TYPE_STRING . ' NOT NULL',               //место обучения
            'begDate' => Schema::TYPE_STRING,                           //даты обучения
            'endDate' => Schema::TYPE_STRING,                           //даты обучения
            ]);

        $this->createTable('{{%prof_educ}}',[
            'prof_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'educ_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            ]);

        $this->createTable('{{%work}}',[
            'id' => Schema::TYPE_PK,
            'place' => Schema::TYPE_STRING . ' NOT NULL',               //место работы
            'position' => Schema::TYPE_STRING . ' NOT NULL',            //должность
            'begDate' => Schema::TYPE_STRING,                           //даты работы
            'endDate' => Schema::TYPE_STRING,                           //даты работы
            ]);

        $this->createTable('{{%prof_work}}',[
            'prof_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'work_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            ]);

        $this->createTable('{{%company}}',[
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'avatarUrl' => Schema::TYPE_STRING . ' NOT NULL',
            'textInfo' => Schema::TYPE_TEXT,                              //информация о компании
            ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%profile}}');
        $this->dropTable('{{%company}}');
        $this->dropTable('{{%education}}');
        $this->dropTable('{{%prof_educ}}');
        $this->dropTable('{{%work}}');
        $this->dropTable('{{%prof_work}}');
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
