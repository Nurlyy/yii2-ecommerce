<?php

use common\models\Product;
use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'attribute'=>'id',
                'contentOptions'=>[
                    'style'=>'width:75px'
                ]
            ],
            [
                'attribute'=>'image',
                'content'=>function($model){
                    /** @var \common\models\Product $model  */
                    return Html::img($model->getImageUrl(), ['width'=>150]);                    
                },
            ],
            'name',
            
            [
                'attribute' => 'price',
                'format' => ['currency', 'KZT']
            ],
            [
                'attribute'=>'status',
                'content'=>function($model){
                    return Html::tag('span', $model->status ? 'Active' : 'Draft', [
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                    ]);
                },
            ],
            'created_at:datetime',
            'updated_at:datetime',
            // 'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            
        ],
    ]); ?>


</div>
