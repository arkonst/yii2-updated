<?php

namespace app\models\tables;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int|null $created_by_id
 * @property int|null $responsible_id
 * @property string|null $deadline
 * @property int|null $status_id
 */
class Tasks extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }




    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['created_by_id', 'responsible_id', 'status_id'], 'integer'],
            [['deadline'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }


    public function getStatus() {
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    public function getResponsible() {
        return $this->hasOne(Users::class, ['id' => 'responsible_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_by_id' => 'Created By ID',
            'responsible_id' => 'Responsible ID',
            'deadline' => 'Deadline',
            'status_id' => 'Status ID',
        ];
    }
}
