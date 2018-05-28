<?php

use yii\db\Migration;

/**
 * Class m180528_052011_assignment
 */
class m180528_052011_assignment extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		
		$this->createTable('assignment', [
            'id' => $this->primaryKey(),
			'title' => $this->text()->notNull(),
			'teacher' => $this->text()->notNull(),
			'student' => $this->text()->notNull(),
			'lesson' => $this->text()->notNull(),
			'content' => $this->text()->notNull(),
			'status' => "ENUM('Yapılmadı','Yapıldı')",
			'date' => $this->dateTime(),
            'author' => $this->integer(11)->defaultValue(1),
        ], $tableOptions);
       

    }

    public function down()
    {
        $this->dropTable('assignment');
    }
}

