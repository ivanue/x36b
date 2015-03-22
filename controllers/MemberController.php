<?php

namespace app\controllers;

class MemberController extends \yii\web\Controller
{
    public function actionGetKey()
    {
        return $this->render('get-key');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
