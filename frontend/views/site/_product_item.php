<?php

/** @var \common\models\Product $model */

use phpDocumentor\Reflection\Types\String_;
use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="<?php echo $model->getImageUrl() ?>" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php echo $model->name ?></h5>
                <!-- Product price-->
            </div>
            <div class="card-text mt-2">
                <p><?php echo $model->getShortDescription($model) ?></p>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer mt-0 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
            <h6 class=""><?php echo Yii::$app->formatter->asCurrency($model->price, 'KZT') ?></h6>
                <a class="btn btn-outline-dark mt-auto btn-add-to-cart" href="<?php echo Url::to('/cart/add') ?>">Add To Cart</a>
            </div>
        </div>
    </div>