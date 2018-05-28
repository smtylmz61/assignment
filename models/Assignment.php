<?php

namespace kouosl\assignment\models;

use Yii;


class Assignment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'status', 'teacher', 'student', 'lesson'], 'required'],
            [['title', 'title', 'teacher', 'student', 'lesson', 'content'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'teacher' => 'Teacher',
            'student' => 'Student',
			'lesson' => 'lesson',
			'content' => 'Content',
			'status' => 'Status',
            'date' => 'Date',
            'author' => 'Author',
        ];
    }
}
