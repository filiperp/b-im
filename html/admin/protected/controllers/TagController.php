<?php

class TagController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Tag'),
		));
	}

	public function actionCreate() {
		$model = new Tag;


		if (isset($_POST['Tag'])) {
			$model->setAttributes($_POST['Tag']);
			$relatedData = array(
				'analises' => $_POST['Tag']['analises'] === '' ? null : $_POST['Tag']['analises'],
				'arquivos' => $_POST['Tag']['arquivos'] === '' ? null : $_POST['Tag']['arquivos'],
				'programas' => $_POST['Tag']['programas'] === '' ? null : $_POST['Tag']['programas'],
				);

			if ($model->saveWithRelated($relatedData)) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_tag));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Tag');


		if (isset($_POST['Tag'])) {
			$model->setAttributes($_POST['Tag']);
			$relatedData = array(
				'analises' => $_POST['Tag']['analises'] === '' ? null : $_POST['Tag']['analises'],
				'arquivos' => $_POST['Tag']['arquivos'] === '' ? null : $_POST['Tag']['arquivos'],
				'programas' => $_POST['Tag']['programas'] === '' ? null : $_POST['Tag']['programas'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id_tag));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Tag')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Tag');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Tag('search');
		$model->unsetAttributes();

		if (isset($_GET['Tag']))
			$model->setAttributes($_GET['Tag']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}