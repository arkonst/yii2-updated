<?php


namespace app\components;

use app\models\tables\Tasks;
use yii\base\BootstrapInterface;
use yii\base\Component;
use yii\base\Event;

class Bootstrap extends Component implements BootstrapInterface
{
    public function bootstrap($app)
    {
        Event::on(Tasks::class, Tasks::EVENT_AFTER_INSERT, function(Event $event){
            /** @var Tasks $task */
            $task = $event->sender;
            $responsible = $task->responsible;
            \Yii::$app->mailer->compose()
                ->setTo($responsible->email)
                ->setFrom(['admin@site.ru'])
                ->setSubject('New Task')
                ->setTextBody(
                    "Уважаемый {$responsible->login}! Создана новая задача:  {$task->title}"
                )
                ->send();
        });
    }

}