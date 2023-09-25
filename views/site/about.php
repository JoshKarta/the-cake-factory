<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about container ">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code> -->

    <?= Html::img('@web/images/cake-shop.jpg', ['class' => 'img-fluid rounded-3 object-fit-cover mt-4', "style" => "height:400px; width:100%"]) ?>

    <div class="mt-5">
        <h2 class="fw-semibold">About The Cake Factory</h2>
        <p>Welcome to The Cake Factory, where sweetness and creativity come together to delight your taste buds and celebrate your special moments. We are passionate artisans of cake baking, dedicated to crafting delicious, beautiful cakes for every occasion.</p>
    </div>

    <div class="my-5 ">
        <div class="row gap-5 ">
            <div class="col">
                <?= Html::img('@web/images/american-heritage.jpg', ['class' => "img-fluid rounded-3 w-full object-fit-cover"]) ?>
            </div>
            <div class="col my-auto ">
                <h2 class="fw-semibold fs-2 ">Our Journey</h2>
                The Cake Factory journey began with a simple yet heartfelt passion for creating delightful experiences through the art of baking. Over the years, we have refined our skills and honed our expertise, transforming that passion into a thriving business that spreads joy through every slice of cake.
            </div>
        </div>
    </div>

    <div class="my-5 ">
        <div class="row gap-5 ">
            <div class="col">
                <div class="d-flex flex-column"><?= Html::img('@web/images/american-heritage.jpg', ['class' => "img-fluid rounded-3 w-full object-fit-cover"]) ?>
                    <h2 class="fw-semibold fs-2">Our Philosophy</h2>
                    <p>At The Cake Factory, we believe in the power of a good cake to bring people together. Our cakes are not just desserts; they are the centerpieces of your celebrations, carefully baked and adorned to make every moment memorable.</p>
                </div>
            </div>
            <div class="col my-auto ">
                <h2 class="fw-semibold fs-2 ">Our Journey</h2>
                The Cake Factory journey began with a simple yet heartfelt passion for creating delightful experiences through the art of baking. Over the years, we have refined our skills and honed our expertise, transforming that passion into a thriving business that spreads joy through every slice of cake.
            </div>
        </div>
    </div>
</div>