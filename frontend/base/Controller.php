<?php


namespace frontend\base;

use yii\web\Controller as WebController;
use common\models\CartItem;
use Yii;

class Controller extends WebController{

    public function beforeAction($action)
    {
        $this->view->params['cartItemCount'] = CartItem::findBySql('SELECT SUM(quantity) FROM cart_items WHERE created_by = :userId', ['userId' => Yii::$app->user->id])->scalar();
        return parent::beforeAction($action);
    }
    
}