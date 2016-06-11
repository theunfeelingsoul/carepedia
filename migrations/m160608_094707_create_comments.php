<?php

use yii\db\Migration;

/**
 * Handles the creation for table `comments`.
 */
class m160608_094707_create_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'user_id' => $this->string()->notNull(),
            'biz_name' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}
