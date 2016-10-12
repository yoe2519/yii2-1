<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `post`.
 */
class m161012_131657_create_post_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        //$this->createTable('post', [
        //    'id' => $this->primaryKey(),
        //]);
        $this->createTable('post', [
        'id' => 'pk',
        'title' => Schema::TYPE_STRING. ' NOT NULL',
        'content' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('post');
    }

}
