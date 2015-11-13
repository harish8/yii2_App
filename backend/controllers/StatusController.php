<?php
/**
 * Created by PhpStorm.
 * User: harish
 * Date: 13/11/15
 * Time: 3:33 PM
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Status;

class StatusController extends Controller{

    public function actionCreate(){

        $model = new Status();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            //valid data received in $model
            return $this->render('view',['model'=>$model]);
        }
        else{
            //either the page is initially displayed or any error
            return $this->render('create',['model'=>$model]);
        }
    }
}