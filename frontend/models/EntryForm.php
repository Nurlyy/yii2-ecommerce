<?php 
namespace frontend\models;

use Yii;
use yii\base\Model;


class EntryForm extends Model{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name', 'email'], 'required'],
            ['email','email'],
        ];
    }

}

    // public function actionEntry(){
    //     $model = new EntryForm();
    //      if($model->load(Yii::$app->request->post()) && $model->validate()){
    //         return $this->render('entry-confirm', ['model'=> $model]);
    //      }else{
    //         return $this->render('entry', ['model'=>$model]);
    //      }
    // }
