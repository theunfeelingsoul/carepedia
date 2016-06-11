<?php

use yii\db\Migration;

/**
 * Handles the creation for table `doctor_table`.
 */
class m160607_063513_create_doctor_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('doctor', [
            'id' => $this->primaryKey(),
            'biz_name' => $this->string()->notNull(),
            'dr_name' => $this->string()->notNull(),
            'spec' => $this->string()->notNull(),
            'available' => $this->string()->notNull(),
            'area' => $this->string()->notNull(),
            'desc' => $this->text(),
        ]);



    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('doctor_table');
    }
}
