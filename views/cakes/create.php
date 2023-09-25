<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cakes $model */

$this->title = 'Cakes';
// $this->params['breadcrumbs'][] = ['label' => 'Cakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="cakes-create">

    <h1>Add new cake</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>