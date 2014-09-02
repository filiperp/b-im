<?php

class VeiculoController extends GxController {

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
			'model' => $this->loadModel($id, 'Veiculo'),
		));
	}

	public function actionCreate() {
		$model = new Veiculo;

		$this->performAjaxValidation($model, 'veiculo-form');

		if (isset($_POST['Veiculo'])) {
			$model->setAttributes($_POST['Veiculo']);
			$relatedData = array(
				'analises' => $_POST['Veiculo']['analises'] === '' ? null : $_POST['Veiculo']['analises'],
				'pracas' => $_POST['Veiculo']['pracas'] === '' ? null : $_POST['Veiculo']['pracas'],
				);

            Yii::import('application.controllers.FileObjectController');
            $model->imagem_veiculo = FileObjectController::saveFileAs($model);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_veiculo));
			}
		}
        unset($_SESSION['current_image_'.get_class($model)]);
		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Veiculo');

		$this->performAjaxValidation($model, 'veiculo-form');

		if (isset($_POST['Veiculo'])) {
			$model->setAttributes($_POST['Veiculo']);
			$relatedData = array(
				'analises' => $_POST['Veiculo']['analises'] === '' ? null : $_POST['Veiculo']['analises'],
				'pracas' => $_POST['Veiculo']['pracas'] === '' ? null : $_POST['Veiculo']['pracas'],
				);
            Yii::import('application.controllers.FileObjectController');
            $model->imagem_veiculo = FileObjectController::saveFileAs($model);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id_veiculo));
			}
		}
        $_SESSION['current_image_'. get_class($model)] = $model->imagem_veiculo;
		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
//			$this->loadModel($id, 'Veiculo')->delete();
            $model = $this->loadModel($id, 'Veiculo');

            unlink ($model->imagem_veiculo);
            unset($_SESSION['current_image_'.get_class($model)]);
            $model->delete();
			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Veiculo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Veiculo('search');
		$model->unsetAttributes();

		if (isset($_GET['Veiculo']))
			$model->setAttributes($_GET['Veiculo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}



}