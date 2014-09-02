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


    public static function saveFileONPath($model, $path){
        $label= get_class($model);
        $images = CUploadedFile::getInstancesByName($label);
        $return =isset( $model['imagem_'.strtolower($label)])?$model['imagem_'.strtolower($label)] :$model['caminho_arquivo'];
        if(count($images) > 0)
        {
            foreach($images as $img)
            {
                $initalPAth = $path ; //'../uploads/'. strtolower($label).'/';
                if (!file_exists($initalPAth) && !is_dir($initalPAth)) {
                    mkdir($initalPAth);
                }



                $ext = pathinfo($img->name, PATHINFO_EXTENSION);
                $newName = strtolower($label) .md5(microtime(true)).'.'.$ext;  //md5(microtime(true)) . '_' . $img->name;
                $res = $img->saveAs($initalPAth. $newName);
                if (isset($_SESSION['current_image_'.$label])) {
                    if(file_exists($_SESSION['current_image_'.$label])) unlink ($_SESSION['current_image_'.$label]);
                    unset($_SESSION['current_image_'.$label]);
                }
                $return = $initalPAth . $newName;

            }

        }

        return $return;
    }

    public static  function saveFileAs($model){
        $label= get_class($model);
       return FileObjectController::saveFileONPath($model,'../uploads/'. strtolower($label).'/');
    }

    public static  function createBasePathArquivo($model){
        $label= get_class($model);
        $base='../uploads/'. strtolower($label).'/';
        if (!file_exists($base) && !is_dir($base)) {
            mkdir($base);
        }
        return FileObjectController::saveFileONPath($model,'../uploads/'. strtolower($label).'/'.strtolower($model->ref_arquivo).'/');
    }

    public static  function updateArquivo($model){
        $label= get_class($model);

        $histPAth='../uploads/'. strtolower($label).'/'.strtolower($model->ref_arquivo).'/hist/';
        if (!file_exists($histPAth) && !is_dir($histPAth)) {
            mkdir($histPAth);
        }
        if(isset( $_SESSION['current_image_'. get_class($model)] )){
            if($model->caminho_arquivo != $_SESSION['current_image_'. get_class($model)]){
                $hist = new ArquivoHistorico;
                $hist->fk_id_arquivo = $model->id_arquivo;
                $hist->ref_arquivo = $model->ref_arquivo;
                $hist->nome_arquivo = $model->nome_arquivo;
                $hist->caminho_arquivo= $histPAth. basename( $model->caminho_arquivo);
                $hist->save();
                if (copy($_SESSION['current_image_'. get_class($model)],  $hist->caminho_arquivo)) {
                    unlink($_SESSION['current_image_'. get_class($model)]);
                }
            }
        }
        return FileObjectController::saveFileONPath($model,'../uploads/'. strtolower($label).'/'.strtolower($model->ref_arquivo).'/');
    }

}