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
                'actions' => array('index', 'view', 'updateVeiculoPraca'),
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
            $relatedData = array(
                'tags' => $_POST['Programa']['tags'] === '' ? null : $_POST['Programa']['tags'],
            );

            Yii::import('application.controllers.FileObjectController');
            $model->imagem_programa = FileObjectController::saveFileAs($model);

            if ($model->saveWithRelated($relatedData)) {
                FileObjectController::updateNewNameLabel($model);
                $model->save();
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id_programa));
            }
        }
        unset($_SESSION['current_image_' . get_class($model)]);
        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id, 'Programa');

        $this->performAjaxValidation($model, 'programa-form');

        if (isset($_POST['Programa'])) {
            $model->setAttributes($_POST['Programa']);
            $relatedData = array(
                'tags' => $_POST['Programa']['tags'] === '' ? null : $_POST['Programa']['tags'],
            );

            Yii::import('application.controllers.FileObjectController');
            $model->imagem_programa = FileObjectController::saveFileAs($model);

            if ($model->saveWithRelated($relatedData)) {
                $this->redirect(array('view', 'id' => $model->id_programa));
            }
        }
        $_SESSION['current_image_' . get_class($model)] = $model->imagem_programa;
        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id)
    {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $model = $this->loadModel($id, 'Programa');

            unlink($model->imagem_programa);
            unset($_SESSION['current_image_' . get_class($model)]);
            $model->delete();


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

    public function actionUpdateVeiculoPraca()
    {
        $a = $_POST;


        if ($a['isselected'] == 'true') {
            $vpp = new VeiculoPracaPrograma;
            $vpp->fk_id_praca = $a['praca'];
            $vpp->fk_id_veiculo = $a['veiculo'];
            $vpp->fk_id_programa = $a['programa'];
            $vpp->save(true);
        } else {

            $v = $a['veiculo'];
            $p = $a['praca'];
            $pr = $a['programa'];


            $vpp = VeiculoPracaPrograma::model()->find(
                'fk_id_veiculo = :veiculo AND fk_id_praca = :praca  AND   fk_id_programa = :programa ',
                array(':veiculo' => $v, ':praca' => $p, ':programa' => $pr));
            $vpp->delete();
        }

        echo json_encode($_POST);
        Yii::app()->end();

    }

}