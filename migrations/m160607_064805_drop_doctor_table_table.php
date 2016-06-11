<?php

use yii\db\Migration;

/**
 * Handles the dropping for table `doctor_table_table`.
 */
class m160607_064805_drop_doctor_table_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropTable('doctor_table');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('doctor_table', [
            'id' => $this->primaryKey(),
        ]);
    }
}
