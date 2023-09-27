<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-form">
    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="d-flex gap-4 ">
            <div class="flex-grow-1">
                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="flex-grow-1">
                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <?= $form->field($model, 'phone_number')->textInput() ?>
        <div class="d-flex gap-4 ">
            <div class="flex-grow-1">
                <?= $form->field($model, 'type_cake')->dropDownList(['vanilla' => 'Vanilla', 'chocolate' => 'Chocolate', 'redvelvet' => 'Redvelvet', 'marmer' => 'Marmer',], ['prompt' => '']) ?>
            </div>
            <div class="flex-grow-1">
                <?= $form->field($model, 'type_flavor')->dropDownList(['strawberry' => 'Strawberry', 'chocolate' => 'Chocolate', 'lemon' => 'Lemon', 'coockiescream' => 'Coockiescream',], ['prompt' => '']) ?>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Place order', ['class' => 'btn btn-outline-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>