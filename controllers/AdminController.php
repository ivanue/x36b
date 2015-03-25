<?php

namespace app\controllers;

use yii\filters\AccessControl;

class AdminController extends \yii\web\Controller
{
     public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }
    
    public function actionCatalogos()
    {
        return $this->render('catalogos');
    }

    public function actionConfig()
    {
        return $this->render('config');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLlaves()
    {
        return $this->render('llaves');
    }

    public function actionPaquetes()
    {
        return $this->render('paquetes');
    }

    public function actionReportes()
    {
        return $this->render('reportes');
    }

    public function actionUsuarios()
    {
        return $this->render('usuarios');
    }

}
