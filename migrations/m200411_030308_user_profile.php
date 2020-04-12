<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200411_030308_user_profile
 */
class m200411_030308_user_profile extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_profile}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'sex' => $this->boolean(),
            'birthday' => $this->date(),
            'country' => $this->string(),
            'phonenumber' => $this->bigInteger(),
        ], $tableOptions);

        $this->createIndex(
            'idx-user_profile-user',
            'user_profile',
            'user_id'
        );

        $this->addForeignKey(
            'fk-user_profile-user',
            'user_profile',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('{{%user_profile}}');
    }
}
