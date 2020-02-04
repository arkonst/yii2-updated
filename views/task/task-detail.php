<?php

use \yii\widgets\ActiveForm;
use \yii\helpers\Url;
use \yii\helpers\Html;

?>
<div class="task-detail">

        <?php $form = ActiveForm::begin(['action' => Url::to(['task/save', 'id' => $model->id])]);?>
        <?=$form->field($model, 'title')->textInput();?>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="col-lg-12">
                <?=$form->field($model, 'status')
                    ->dropDownList($statusesList)?>
            </div>
            <div class="col-lg-12">
                <?=$form->field($model, 'responsible_id')
                    ->dropDownList($usersList)?>
            </div>
            <div class="col-lg-12">
                <?=$form->field($model, 'deadline')
                    ->textInput(['type' => 'date'])
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?=$form->field($model, 'description')
                ->textarea()?>
        </div>
        <?=Html::submitButton("Сохранить",['class' => 'btn btn-success']);?>
        <?ActiveForm::end()?>

</div>