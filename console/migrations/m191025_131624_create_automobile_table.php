<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%automobile}}`.
 */
class m191025_131624_create_automobile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%automobile}}', [
            'id' => $this->primaryKey(),
            'mark' => $this->string(),
            'model' => $this->string(),
            'number' => $this->string(),
            'color' => $this->string(),
            'parking' => $this->tinyInteger(1),
            'comment' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%automobile}}');
    }
}
