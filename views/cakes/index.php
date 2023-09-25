<?php

use app\models\Cakes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CakesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cakes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cakes-index container">

    <h1 class="mt-4 "><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'flavor',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cakes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


    <p>
        <?= Html::a('Add new cake', ['create'], ['class' => 'btn btn-outline-primary']) ?>
    </p>

</div>