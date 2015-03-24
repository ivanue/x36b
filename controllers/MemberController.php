<?php

namespace app\controllers;
use Yii;
use app\models\LoginForm;

class MemberController extends \yii\web\Controller
{
    public function actionGetkey()
    {   
        $model = new LoginForm();
        $oUser = $model->getUserById(Yii::$app->user->id)->getAttributes();
        $keyFileSeed = Yii::$app->params['keyFileSeed'];
        $strMemberKey = sha1($oUser['username'] . $keyFileSeed . $oUser['created']);
        header("Content-disposition: attachment; filename=llave.rxt");
    	header("Content-type: application/octet-stream");
    	echo $strMemberKey;       
        exit;
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
