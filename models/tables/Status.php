<?php

namespace app\models\tables;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'string', 'max' => 50],
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
            'description' => 'Description',
        ];
    }

    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['status_id' => 'id']);
    }

    /**
     * @return array
     */
    public static function getList()
    {
        return ArrayHelper::map(
            static::find()
                ->select(['id', 'name'])
                ->asArray()
                ->indexBy('id')
                ->all(), 'id', 'name');
    }

}
