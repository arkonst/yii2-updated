<?php

?>

<div class="col-lg-3 col-sm-6 card">
    <a class="task-card-link" href="/task/task-detail&id=<?=$model->id?>">
        <h4><?= $model->title; ?></h4>
        <p><?= $model->description; ?></p>
        <p>Исполнитель: <?= $model->responsible->login; ?></p>
    </a>
</div>

