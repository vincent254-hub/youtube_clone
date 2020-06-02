<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 */
class m200523_182038_create_videos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'video_id' => $this->string(16)->notNull(),
            'title' => $this->string(512)->notNull(),
            'description' => $this->text(),
            'tags' => $this->string(512),
            'status' => $this->integer(1),
            'has_thumbnail' => $this->boolean(),
            'video_name' => $this->string(512),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);

        $this->addPrimaryKey(
            'PK_videos_video_id',
            '{{%video}}',
            'video_id'
        );

//creates index for column `created_by`
        $this->createIndex(
            '{{%idx-videos-created_by}}',
            '{{%video}}',
            'created_by'

        );
//    Add foreign key fo foreign table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-videos-created_by}}',
            '{{%video}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%video}}');
    }
}
