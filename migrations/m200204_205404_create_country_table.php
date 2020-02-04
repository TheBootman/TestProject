<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m200204_205404_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
