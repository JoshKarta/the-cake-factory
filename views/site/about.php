<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about container ">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="mt-2">
        <h2 class="fw-semibold">About The Cake Factory</h2>
        <p>Welcome to The Cake Factory, where sweetness and creativity come together to delight your taste buds and celebrate your special moments. We are passionate artisans of cake baking, dedicated to crafting delicious, beautiful cakes for every occasion.</p>
    </div>

    <?= Html::img('@web/images/cake-shop.jpg', ['class' => 'img-fluid rounded-3 object-fit-cover mt-4', "style" => "height:350px; width:100%"]) ?>

    <div class="d-flex justify-content-center " style="padding: 64px 0;">
        <q>
            <cite class="fs-3 ">All you need is love. But a little chocolate cake now and then doesn't hurt.</cite>
        </q>
    </div>

    <div>
        <div class="d-flex flex-column flex-lg-row gap-5 ">
            <div class="col">
                <?= Html::img('@web/images/american-heritage.jpg', ['class' => "img-fluid rounded-3 w-full object-fit-cover"]) ?>
            </div>
            <div class="col my-auto ">
                <h2 class="fw-semibold fs-2 mt-2 mt-lg-0 ">Our Journey</h2>
                The Cake Factory journey began with a simple yet heartfelt passion for creating delightful experiences through the art of baking. Over the years, we have refined our skills and honed our expertise, transforming that passion into a thriving business that spreads joy through every slice of cake.
            </div>
        </div>
    </div>


    <div style="padding: 48px 0">
        <h2 class="text-center">Back to History</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim soluta repellat natus vero repudiandae, fugiat illum velit odit optio quia sed doloribus id aliquid laboriosam sint officiis nam, dolorem dolor. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aliquid vel id iure? At fugiat aspernatur esse eligendi deserunt, voluptates vel. Voluptatem sint quae sed excepturi inventore atque necessitatibus incidunt?</p>
    </div>

    <div style="padding: 24px 0;">
        <div class="d-flex flex-column flex-lg-row gap-5 ">
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center "><?= Html::img('@web/images/about-philosophy.jpg', ['class' => "img-fluid rounded-3 w-full object-fit-cover"]) ?>
                    <h2 class="fw-semibold fs-2 mt-4 ">Our Philosophy</h2>
                    <p class="text-center">At The Cake Factory, we believe in the power of a good cake to bring people together. Our cakes are not just desserts; they are the centerpieces of your celebrations, carefully baked and adorned to make every moment memorable.</p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center "><?= Html::img('@web/images/about-craftmanship.jpg', ['class' => "img-fluid rounded-3 w-full object-fit-cover", "style" => "height:420px"]) ?>
                    <h2 class="fw-semibold fs-2 mt-4 ">Our Philosophy</h2>
                    <p class="text-center">At The Cake Factory, we believe in the power of a good cake to bring people together. Our cakes are not just desserts; they are the centerpieces of your celebrations, carefully baked and adorned to make every moment memorable.</p>
                </div>
            </div>
        </div>
    </div>

</div>