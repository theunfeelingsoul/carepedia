<?php

use yii\db\Migration;

/**
 * Handles dropping biz_name from table `comments`.
 */
class m160608_101452_drop_biz_name_from_comments extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('comments', 'biz_name', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('comments', 'biz_name', $this->string());
    }
}
