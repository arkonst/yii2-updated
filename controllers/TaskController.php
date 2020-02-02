<?php


namespace app\controllers;

use app\models\tables\Tasks;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class TaskController extends Controller
{
        public function actionIndex() {

            $dataProvider = new ActiveDataProvider([
                'query' => Tasks::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->render('index', ['listDataProvider' => $dataProvider]);

        }

        public function actionTaskDetail($id) {
            return $this->render('task-detail');
        }
}