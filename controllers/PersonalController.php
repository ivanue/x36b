<?php

namespace app\controllers;
use Yii;

class PersonalController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
