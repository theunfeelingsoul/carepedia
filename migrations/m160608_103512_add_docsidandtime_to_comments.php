<?php

use yii\db\Migration;

/**
 * Handles adding docsidandtime to table `comments`.
 */
class m160608_103512_add_docsidandtime_to_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('comments', 'docs_id', $this->text());
        $this->addColumn('comments', 'time', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('comments', 'docs_id');
        $this->dropColumn('comments', 'time');
    }
}
