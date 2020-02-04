<?php


namespace app\controllers;

use app\models\tables\Status;
use app\models\tables\Tasks;
use app\models\tables\Users;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex($month = null)
    {
        $query = Tasks::find();

        $cache = \Yii::$app->cache;



        if(!is_null($month)){
            $query->where('MONTH(deadline) = :month', [':month' =>$month]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        \Yii::$app->db->cache(function () use ($dataProvider){
            return $dataProvider->prepare();
        });

        return $this->render('index', ['dataProvider' => $dataProvider]);

    }



        public function actionTaskDetail($id) {
            return $this->render('task-detail', [
                'model' => Tasks::findOne($id),
                'usersList' => Users::getUsersList(),
                'statusesList' => Status::getList(),
            ]);
        }
}