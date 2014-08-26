<?php

class ProgramaController extends GxController
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
            'model' => $this->loadModel($id, 'Programa'),
        ));
    }

    public function actionCreate()
    {
        $model = new Programa;

        $this->performAjaxValidation($model, 'programa-form');

        if (isset($_POST['Programa'])) {
            $model->setAttributes($_POST['Programa']);

            if ($model->save()) {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id_programa));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id, 'Programa');

        $this->performAjaxValidation($model, 'programa-form');

        if (isset($_POST['Programa'])) {
            $model->setAttributes($_POST['Programa']);

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id_programa));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->loadModel($id, 'Programa')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Programa');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Programa('search');
        $model->unsetAttributes();

        if (isset($_GET['Programa']))
            $model->setAttributes($_GET['Programa']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}