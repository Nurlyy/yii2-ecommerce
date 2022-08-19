<?php


namespace frontend\base;

use yii\web\Controller as WebController;
use common\models\CartItem;
use Yii;

class Controller extends WebController{

    public function beforeAction($action)
    {

        

        $this->view->params['cartItemCount'] = CartItem::getTotalQuantityForUser(currentUserId());
        return parent::beforeAction($action);
    }
    
}