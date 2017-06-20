<?php

use yii\db\Migration;

class m170620_080817_create_time_books extends Migration
{
   
    public function up()
    {
       $this->createTable('time_books', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255)->notNull(),
            'last_name' => $this->string(255)->notNull(),
            'phone' => $this->string(32),
            'email' => $this->string(64),
            'reception_date' => $this->dateTime(),
            'is_irrelevant' => $this->boolean(1),
        ]);

    }

    public function down()
    {
        $this->dropTable('time_books');
    }
   
}
