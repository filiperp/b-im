<?php

class ArquivoController extends GxController
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
            'model' => $this->loadModel($id, 'Arquivo'),
        ));
    }

    public function actionCreate()
    {
        $model = new Arquivo;

        $this->performAjaxValidation($model, 'arquivo-form');

        if (isset($_POST['Arquivo'])) {

            $_POST['Arquivo']['usuario'] =Yii::app()->user->getId();
            $_POST['Arquivo']['data'] = date('Y-m-d h:i:s', time());
            $model->setAttributes($_POST['Arquivo']);
            $relatedData = array(
                'tags' => $_POST['Arquivo']['tags'] === '' ? null : $_POST['Arquivo']['tags'],
            );
//echo '<pre>';
//            var_dump($_POST['Arquivo']);
//            var_dump($model);
//            die();

            if (intval($relatedData['tags'][0]) != 14 && intval($relatedData['tags'][0]) != 15) {
                Yii::import('application.controllers.FileObjectController');
                $model->caminho_arquivo = $_POST['Arquivo']['caminho_arquivo'];
                $model->caminho_arquivo = FileObjectController::createBasePathArquivo($model);

            }

            if ($model->saveWithRelated($relatedData)) {

                if (intval($relatedData['tags'][0]) != 14 && intval($relatedData['tags'][0]) != 15) {
                    FileObjectController::updateNewNameLabel($model);
                    $model->save();
                }

                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id_arquivo));
            }
        }
        unset($_SESSION['current_image_' . get_class($model)]);
        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id, 'Arquivo');

        $this->performAjaxValidation($model, 'arquivo-form');

        if (isset($_POST['Arquivo'])) {

            $_POST['Arquivo']['usuario'] =Yii::app()->user->getId();
            $_POST['Arquivo']['data'] = date('Y-m-d h:i:s', time());
            $model->setAttributes($_POST['Arquivo']);
            $relatedData = array(
                'tags' => $_POST['Arquivo']['tags'] === '' ? null : $_POST['Arquivo']['tags'],
            );

            Yii::import('application.controllers.FileObjectController');
            if (intval($relatedData['tags'][0]) != 14 && intval($relatedData['tags'][0]) != 15) {

                if ($_SESSION['current_image_' . get_class($model)] != $model->caminho_arquivo) {
                    FileObjectController::createHistorico($model);
                    $model->caminho_arquivo = FileObjectController::saveFileAs($model, $model->ref_arquivo. '/');
                }

            }

            if ($model->saveWithRelated($relatedData)) {
                $this->redirect(array('view', 'id' => $model->id_arquivo));
            }
        }


        $_SESSION['current_image_' . get_class($model)] = $model->caminho_arquivo;
        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->loadModel($id, 'Arquivo')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Arquivo');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin()
    {
        $model = new Arquivo('search');
        $model->unsetAttributes();

        if (isset($_GET['Arquivo']))
            $model->setAttributes($_GET['Arquivo']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}