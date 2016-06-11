<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $user_id
 * @property string $comment
 * @property string $docs_id
 * @property string $time
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['name', 'email', 'user_id'], 'required'],
            [['comment', 'docs_id', 'time'], 'string'],
            [['name', 'email', 'user_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'user_id' => 'User ID',
            'comment' => 'Comment',
            'docs_id' => 'Docs ID',
            'time' => 'Time',
        ];
    }
}
