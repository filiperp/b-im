<?php

class PracaController extends GxController {

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
			'model' => $this->loadModel($id, 'Praca'),
		));
	}

	public function actionCreate() {
		$model = new Praca;

		$this->performAjaxValidation($model, 'praca-form');

		if (isset($_POST['Praca'])) {
			$model->setAttributes($_POST['Praca']);
			$relatedData = array(
				'veiculos' => $_POST['Praca']['veiculos'] === '' ? null : $_POST['Praca']['veiculos'],
				);
            Yii::import('application.controllers.FileObjectController');
            $model->imagem_praca = FileObjectController::saveFileAs($model);

			if ($model->saveWithRelated($relatedData)) {
                FileObjectController::updateNewNameLabel($model);
                $model->save();
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_praca));
			}
		}
        unset($_SESSION['current_image_'.get_class($model)]);
		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Praca');

		$this->performAjaxValidation($model, 'praca-form');




		if (isset($_POST['Praca'])) {
			$model->setAttributes($_POST['Praca']);
			$relatedData = array(
				'veiculos' => $_POST['Praca']['veiculos'] === '' ? null : $_POST['Praca']['veiculos'],
				);

            Yii::import('application.controllers.FileObjectController');
            $model->imagem_praca = FileObjectController::saveFileAs($model);
			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id_praca));
			}
		}
        $_SESSION['current_image_'. get_class($model)] = $model->imagem_praca;

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			//$this->loadModel($id, 'Praca')->delete();




            $model = $this->loadModel($id, 'Praca');
            unlink ($model->imagem_praca);
            unset($_SESSION['current_image_'.get_class($model)]);
            $model->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Praca');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Praca('search');
		$model->unsetAttributes();

		if (isset($_GET['Praca']))
			$model->setAttributes($_GET['Praca']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}