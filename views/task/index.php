<?php

use yii\widgets\ListView;

?>
    <form method="post" action="task">
        <select name="month_select" >
            <option value="1">Январь</option>
            <option value="2">Февраль</option>
            <option value="3">Март</option>
            <option value="4">Апрель</option>
            <option value="5">Май</option>
            <option value="6">Июнь</option>
            <option value="7">Июль</option>
            <option value="8">Август</option>
            <option value="9">Сентябрь</option>
            <option value="10">Октябрь</option>
            <option value="11">Ноябрь</option>
            <option value="12">Декабрь</option>
        </select>
        <input type="submit" name="Показать задачи">
    </form>
<?php


echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_task-card',
    'options' => [
        'tag' => 'div',
        'class' => 'tasks-list',
    ],
    'summary' => false,
]);

//var_dump($dataProvider);







