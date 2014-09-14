<?php

class NoticiaController extends GxController
{

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('index', 'view'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('minicreate', 'create', 'update', 'admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'Noticia'),
        ));
    }

    public function actionCreate()
    {
        $model = new Noticia;


        $this->performAjaxValidation($model, 'noticia-form');

        if (isset($_POST['Noticia'])) {
            $model->setAttributes($_POST['Noticia']);

            Yii::import('application.controllers.FileObjectController');
            $model->imagem_noticia = FileObjectController::saveFileAs($model);

            if ($model->save()) {
                FileObjectController::updateNewNameLabel($model);
                $model->save();
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id_noticia));
            }
        }
        unset($_SESSION['current_image_'.get_class($model)]);
        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id, 'Noticia');


        $this->performAjaxValidation($model, 'noticia-form');

        if (isset($_POST['Noticia'])) {
            $model->setAttributes($_POST['Noticia']);

            Yii::import('application.controllers.FileObjectController');
            $model->imagem_noticia = FileObjectController::saveFileAs($model);


            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id_noticia));
            }
        }


        $_SESSION['current_image_'. get_class($model)] = $model->imagem_noticia;
        $this->render('update', array(
            'model' => $model,
        ));
    }


    public function actionDelete($id)
    {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $model = $this->loadModel($id, 'Noticia');

            unlink ($model->imagem_noticia);
            unset($_SESSION['current_image_'.get_class($model)]);
            $model->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Noticia');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Noticia('search');
        $model->unsetAttributes();

        if (isset($_GET['Noticia']))
            $model->setAttributes($_GET['Noticia']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}