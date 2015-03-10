<?php

/**
 * @author UTEHN PHNU
 */

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

class PatientController extends ActiveController {

    public $modelClass = 'api\modules\v1\models\Patient';
    // เพิ่ม
    public function actions() {
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }
   
    public function actionCreate() {
        $h = getallheaders();
        if (empty($h['USERNAME']) || empty($h['PASSWORD'])) {
            //throw new \yii\web\ConflictHttpException('Not permiss');
            throw new \yii\web\HttpException(400, 'There are no permission');
        }
        $model = new $this->modelClass;
        $model->cid = $_POST['cid'];
        $model->name=$_POST['name'];
        $model->lname=$_POST['lname'];
        $model->dx =  $_POST['dx'];
        $model->save();
        
        
    }
    //จบเพิ่ม

}
