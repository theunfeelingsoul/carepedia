<?php

use yii\db\Migration;

/**
 * Handles adding comment to table `comments`.
 */
class m160608_100323_add_comment_to_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('comments', 'comment', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('comments', 'comment');
    }
}
