<?php

class SiteController extends Controller
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
                'actions' => array('view', 'contact', 'error', 'index', 'site/logout', 'logout', 'page',
                    'main', 'noticias', 'veiculo', 'praca', 'listVeiculos', 'dashboard', 'analise', 'uploadFile'
                ),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('login'),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
      //  Yii::app()->clientScript->scriptMap['jquery.js'] = false;

        $Criteria = new CDbCriteria();
        $Criteria->addCondition('tipo_tag = "veiculo"');
        $tags = Tag::model()->findAll($Criteria);


        $nCriteria = new CDbCriteria();
        $nCriteria->addCondition('ativo_noticia = 1');
        $noticias = Noticia::model()->findAll($nCriteria);


        $this->render('index', array('noticias' => $noticias, 'tags' => $tags, 'cores'=> $this->cores() ));
    }

    public function cores(){
        return array(
            'tv_aberta'=>'green',
            'newco'=>'blue',
            'outernet'=>'red',
            'radio'=>'gray',
            'midia_impressa'=>'green',
        );
    }






    public function actionAnalise($id, $veiculo, $praca){
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $anal = Analise::model()->findByPk($id);

        if($anal->tipo_analise=='painel'){

            $data['link'] = $this->get_trusted_url($anal['descricao_analise']);
        }else{
            $data['link'] = $anal['descricao_analise'];

        }



       // $data['link'] = 'http://uol.com.br';
        $data['analise_selecionada']=$anal;
        $data['link_tipo'] =$anal->tipo_analise;
        $data['remote']=$_SERVER['REMOTE_ADDR'];
        $data['veiculo'] = $veiculo;
        $data['praca'] = $praca;
        $data['nome']=$anal['nome_analise'];
        $this->renderPartial('pages/analise', $data, false, true);

    }

    function get_trusted_url($view_url) {
        $params = ':embed=yes&:toolbar=yes';

        $ticket = http_parse_message(http_post_fields("http://104.131.11.41/frontend/trusted/get.php", array()))->body;
        if (strcmp($ticket, "-1") != 0) {
            return "https://tableau.band.com.br/trusted/$ticket/views/$view_url?$params";
        }
        else
            return 0;
    }




    public function actionMain()
    {

        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        Yii::app()->clientScript->scriptMap['jquery.mixitup.min.js'] = false;
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->renderPartial('pages/main', null, false, true);
        } else {
            $this->actionLogout();
        }
    }

    public function actionNoticias()
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;




        if (Yii::app()->getRequest()->getIsPostRequest()) {


//find out which feed was selected
            $not = Noticia::model()->findByPk($_POST['id_noticia']);

            $xmlDoc = new DOMDocument();
            $xmlDoc->load($not->link_noticia);

//get elements from "<channel>"
            $channel = $xmlDoc->getElementsByTagName('channel')->item(0);
            $channel_title = $channel->getElementsByTagName('title')
                ->item(0)->childNodes->item(0)->nodeValue;


//get and output "<item>" elements
            $x = $xmlDoc->getElementsByTagName('item');
            $items = array();

            for ($i = 0; $i <= $x->length-1; $i++) {
                $item = array();
                $item['title'] = $x->item($i)->getElementsByTagName('title')
                    ->item(0)->childNodes->item(0)->nodeValue;
                $item['link'] = $x->item($i)->getElementsByTagName('link')
                    ->item(0)->childNodes->item(0)->nodeValue;
                $item['description'] = $x->item($i)->getElementsByTagName('description')
                    ->item(0)->childNodes->item(0)->nodeValue;
                $item['pubDate'] = $x->item($i)->getElementsByTagName('pubDate')
                    ->item(0)->childNodes->item(0)->nodeValue;
                array_push($items, $item);
            }





            $data['model'] = $not;
            $data['title'] = $channel_title;
            $data['id'] = $_POST['id_noticia'];

            $Criteria = new CDbCriteria();
            $Criteria->addCondition('ativo_noticia = 1');

            $data['noticias'] = Noticia::model()->findAll($Criteria);
            $data['rss'] = $items;
            $this->renderPartial('pages/noticias', array('data' => $data), false, true);
        }
    }

    public function actionDashboard(){
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $this->renderPartial('pages/dashboard', null, false, true);
    }

    public function actionVeiculo($id, $idPraca= null)
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;


        $v = Veiculo::model()->findByPk($id);
        if(sizeof($v['pracas'])>1 && $idPraca==null){
            $this->actionPraca($id);
        }else{
            $data[ 'id']= (int) $id;
            $data['praca'] = sizeof($v['pracas'])==1?$v['pracas'][0] : Praca::model()->findByPk($idPraca);
            $data[ 'veiculo']= Veiculo::model()->findByPk($id);
            $data['model']= new Arquivo;
            $this->renderPartial('pages/veiculo', $data, false, true);
        }


    }
    public function actionUploadFile(){

        //$this->redirect(array('view', 'id' => $model->id_arquivo));
        //criando historico
        $model = Arquivo::model()->findByPk($_POST['Arquivo'][ 'id_arquivo']);


        $label = get_class($model);

        $histPAth = '../uploads/' . strtolower($label) . '/' . strtolower($model->ref_arquivo) . '/hist/';
        if (!file_exists($histPAth) && !is_dir($histPAth)) {
            mkdir($histPAth);
        }


        $hist = new ArquivoHistorico;
        $hist->fk_id_arquivo = $model->id_arquivo;
        $hist->usuario = $model->usuario;
        $hist->data = $model->data;
        $hist->ref_arquivo = $model->ref_arquivo;
        $hist->nome_arquivo = $model->nome_arquivo;
        $path_parts = pathinfo($model->caminho_arquivo);
        $hist->caminho_arquivo = $histPAth . '__' . microtime(true) . '_' . $path_parts['basename'];
        $hist->save();
        if (copy($model->caminho_arquivo, $hist->caminho_arquivo)) {
            unlink($model->caminho_arquivo);
        }
       $model->usuario =Yii::app()->user->getId();
       $model->data= date('Y-m-d h:i:s', time());
        $img = CUploadedFile::getInstanceByName('Arquivo[image]');
        $img->saveAs($model->caminho_arquivo);


        $data['res']=true;
        $this->renderPartial('pages/uploadResult',$data);
    }

    public function actionListVeiculos($id){
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $data[ 'id']= (int) $id;
        $data[ 'tag']= Tag::model()->findByPk($id);;

        $this->renderPartial('pages/listVeiculos', $data, false, true);
    }

    public function actionPraca($id){
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $data[ 'id']= (int) $id;
        $data[ 'veiculo']= Veiculo::model()->findByPk($id);;

        $this->renderPartial('pages/pracas', $data, false, true);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                    "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;
        //Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->layout = 'metronicLogin';
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}