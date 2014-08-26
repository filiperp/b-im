<?php

class AnaliseController extends GxController {

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
			'model' => $this->loadModel($id, 'Analise'),
		));
	}

	public function actionCreate() {
		$model = new Analise;

		$this->performAjaxValidation($model, 'analise-form');

		if (isset($_POST['Analise'])) {
			$model->setAttributes($_POST['Analise']);
			$relatedData = array(
				'tags' => $_POST['Analise']['tags'] === '' ? null : $_POST['Analise']['tags'],
				'veiculos' => $_POST['Analise']['veiculos'] === '' ? null : $_POST['Analise']['veiculos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_analise));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Analise');

		$this->performAjaxValidation($model, 'analise-form');

		if (isset($_POST['Analise'])) {
			$model->setAttributes($_POST['Analise']);
			$relatedData = array(
				'tags' => $_POST['Analise']['tags'] === '' ? null : $_POST['Analise']['tags'],
				'veiculos' => $_POST['Analise']['veiculos'] === '' ? null : $_POST['Analise']['veiculos'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id_analise));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Analise')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Analise');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Analise('search');
		$model->unsetAttributes();

		if (isset($_GET['Analise']))
			$model->setAttributes($_GET['Analise']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}