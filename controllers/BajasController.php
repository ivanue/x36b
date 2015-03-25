<?php

namespace app\controllers;
use Yii;

class BajasController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
