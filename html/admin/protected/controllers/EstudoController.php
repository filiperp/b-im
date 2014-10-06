<?php

class EstudoController extends GxController {

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
			'model' => $this->loadModel($id, 'Estudo'),
		));
	}

	public function actionCreate() {
		$model = new Estudo;

		$this->performAjaxValidation($model, 'estudo-form');

		if (isset($_POST['Estudo'])) {
			$model->setAttributes($_POST['Estudo']);
			$relatedData = array(
				'tags' => $_POST['Estudo']['tags'] === '' ? null : $_POST['Estudo']['tags'],
                'veiculos' => $_POST['Estudo']['veiculos'] === '' ? null : $_POST['Estudo']['veiculos'],
				);
            Yii::import('application.controllers.FileObjectController');
            $model->caminho_estudo = FileObjectController::saveFileAs($model);


            if ($model->saveWithRelated($relatedData)) {
                FileObjectController::updateNewNameLabel($model);
                $model->save();
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_estudo));
			}
		}
        unset($_SESSION['current_image_'.get_class($model)]);
		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Estudo');

		$this->performAjaxValidation($model, 'estudo-form');

		if (isset($_POST['Estudo'])) {
			$model->setAttributes($_POST['Estudo']);
			$relatedData = array(
				'tags' => $_POST['Estudo']['tags'] === '' ? null : $_POST['Estudo']['tags'],
                'veiculos' => $_POST['Estudo']['veiculos'] === '' ? null : $_POST['Estudo']['veiculos'],
				);
            Yii::import('application.controllers.FileObjectController');
            $model->caminho_estudo = FileObjectController::saveFileAs($model);
			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id_estudo));
			}
		}
        $_SESSION['current_image_'. get_class($model)] = $model->caminho_estudo;
		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
		//	$this->loadModel($id, 'Estudo')->delete();


            $model = $this->loadModel($id, 'Estudo');
            unlink ($model->imagem_praca);
            unset($_SESSION['current_image_'.get_class($model)]);
            $model->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Estudo');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Estudo('search');
		$model->unsetAttributes();

		if (isset($_GET['Estudo']))
			$model->setAttributes($_GET['Estudo']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}