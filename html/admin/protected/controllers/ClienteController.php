<?php

class ClienteController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow', 
				'actions'=>array('index', 'view'),
				'users'=>array('@'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create', 'update', 'admin', 'delete'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Cliente'),
		));
	}

	public function actionCreate() {
		$model = new Cliente;

		$this->performAjaxValidation($model, 'cliente-form');

		if (isset($_POST['Cliente'])) {
			$model->setAttributes($_POST['Cliente']);
            Yii::import('application.controllers.FileObjectController');
            $model->imagem_cliente = FileObjectController::saveFileAs($model);
			if ($model->save()) {
                FileObjectController::updateNewNameLabel($model);
                $model->save();
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_cliente));
			}
		}
        unset($_SESSION['current_image_'.get_class($model)]);

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Cliente');

		$this->performAjaxValidation($model, 'cliente-form');

		if (isset($_POST['Cliente'])) {
			$model->setAttributes($_POST['Cliente']);
            Yii::import('application.controllers.FileObjectController');
            $model->imagem_cliente = FileObjectController::saveFileAs($model);
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_cliente));
			}
		}
        $_SESSION['current_image_'. get_class($model)] = $model->imagem_cliente;

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
		//	$this->loadModel($id, 'Cliente')->delete();

            $model = $this->loadModel($id, 'Cliente');
            unlink ($model->imagem_cliente);
            unset($_SESSION['current_image_'.get_class($model)]);
            $model->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Cliente');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Cliente('search');
		$model->unsetAttributes();

		if (isset($_GET['Cliente']))
			$model->setAttributes($_GET['Cliente']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}