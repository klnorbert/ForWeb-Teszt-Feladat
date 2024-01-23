<?php

use yii\db\Migration;

/**
 * Class m240120_145522_matricak
 */
class m240120_145522_matricak extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%matricak}}', [
            'matrica_id' => $this->primaryKey()->unsigned()->unique(),
            'auto_id' => $this->integer(10)->notNull()->unsigned()->unique(),
            'lejarat_idopont' => $this->timestamp()->notNull(),
            'matrica_tipus' => $this->string(16)->notNull(),
        ], $tableOptions);


        $this->addForeignKey('FK_matricak_auto_id', '{{%matricak}}', 'auto_id', '{{%autok}}', 'auto_id','CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('FK_matricak_auto_id', '{{%matricak}}');
        $this->dropTable('{{%matricak}}');
    }
}
