<?php
/**
 * Created by IntelliJ IDEA.
 * User: filiperp
 * Date: 8/29/14
 * Time: 10:50 AM
 */

class FileObjectController extends CController
{

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions'=>array( 'view', 'contact', 'error', 'index', 'show', 'logout','page'),
                'users'=>array('@'),
            ),

            array('deny',
                'users'=>array('*'),
            ),
        );
    }
    public function actionIndex()
    {
        $model = new FileObject;
        $form = new CForm('application.views.fileObject.form', $model);

        $images = CUploadedFile::getInstancesByName('images');

        if(count($images) > 0)
        {
            foreach($images as $img)
            {
                $newName = md5(microtime(true)) . '_' . $img->name;

                var_dump($img);
                $res = $img->saveAs('../uploads/'. $newName);
            }
          //  var_dump($_FILES);
 //die();
            $this->redirect(array('fileObject/show'));
        }

        $this->render('index', array('form' => $form));
    }

    public function actionShow()
    {
        $data = CFileHelper::findFiles('../uploads/');

        $this->render('show', array('data'=>$data));
    }
}