<?php


namespace app\widgets;


use app\models\tables\Tasks;
use yii\base\Widget;

class TaskCard extends Widget
{
    public $model;

    public function run()
    {
        return $this->render('task-card', ['model' => $this->model]);
    }
}