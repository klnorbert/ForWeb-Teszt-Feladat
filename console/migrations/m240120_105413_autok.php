<?php

use yii\db\Migration;

/**
 * Class m240120_105413_autok
 */
class m240120_105413_autok extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%autok}}', [
            'auto_id' => $this->primaryKey()->unsigned()->unique(),
            'gyarto' => $this->string(128)->notNull(),
            'tipus' => $this->string(128)->notNull(),
            'rendszam' => $this->string(32)->notNull()->unique(),
            'gyartasi_ev' => $this->integer(16)->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%autok}}');
    }
}
