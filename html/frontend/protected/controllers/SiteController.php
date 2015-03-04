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
                    'main', 'noticias', 'veiculo', 'praca', 'listVeiculos', 'dashboard', 'analise', 'programa', 'uploadFile'
                ),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('login', 'imgbuilder'),
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


        $this->render('index', array('noticias' => $noticias, 'tags' => $tags, 'cores' => $this->cores()));
    }

    public function cores()
    {
        return array(
            'tv_aberta' => 'green',
            'newco' => 'blue',
            'outernet' => 'red',
            'radio' => 'gray',
            'midia_impressa' => 'green',
        );
    }

    public function coresNotes()
    {
        return array(
            'tv_aberta' => 'note-success',
            'newco' => 'note-info',
            'outernet' => 'note-danger',
            'radio' => 'well',
            'midia_impressa' => 'note-success',
        );
    }
    function do_post($url, $data)
    {
        $params = array('http' => array(
            'method' => 'POST',
            'content' => $data
        ));

        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp) {
            throw new Exception("Problem with $url, $php_errormsg");
        }
        $response = @stream_get_contents($fp);
        if ($response === false) {
            throw new Exception("Problem reading data from $url, $php_errormsg");
        }
        return $response;
    }

    function get_trusted_url($view_url)
    {
        $params = ':embed=yes&:toolbar=yes';
        // $ticket = http_parse_message(http_post_fields("https://im.band.com.br/frontend/trusted/get.php", array()))->body;
         $ticket =  $this->do_post("https://im.band.com.br/frontend/trusted/get.php", array());
      //  echo '<pre>'.$ticket;die();
        if (strcmp($ticket, "-1") != 0) {
            return "https://tableau.band.com.br/trusted/$ticket/views/$view_url?$params";
        } else
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
        Log::createLog('noticias','Acessou as Notícias', __FUNCTION__);

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

            for ($i = 0; $i <= $x->length - 1; $i++) {
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

    public function actionDashboard()
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $this->renderPartial('pages/dashboard', null, false, true);
    }

    public function actionVeiculo($id, $idPraca = null, $menu = null)

    {
        if ($menu == null) $menu = 'analises'; //comerical ||estudos || analises
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;


        $v = Veiculo::model()->findByPk($id);
        Log::createLog($v->ref_veiculo,'Acessou o Veículo', __FUNCTION__);
        //$aAlphabetic = Analise::model()->with()
        if (sizeof($v['pracas']) > 1 && $idPraca == null) {
            $this->actionPraca($id);
        } else {
            $data['id'] = (int)$id;

            $data['praca'] = sizeof($v['pracas']) == 1 ? $v['pracas'][0] : Praca::model()->findByPk($idPraca);
            $data['veiculo'] = Veiculo::model()->findByPk($id);
            // $data['model']= new Arquivo;
            $data['tag'] = $v->tags[0];
            $data['menu'] = $menu;
            $this->renderPartial('pages/veiculo', $data, false, true);
        }


    }

    public function actionPrograma($idVeiculo, $idPraca, $idPrograma)
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $criteria = new CDbCriteria;
        $criteria->condition = "
                                fk_id_veiculo=:fk_veiculo AND
                                fk_id_praca=:fk_praca AND
                                fk_id_programa=:fk_programa
                                ";
        $criteria->params = array(':fk_veiculo' => $idVeiculo, ':fk_praca' => $idPraca, ':fk_programa' => $idPrograma);
        $criteria->order = ' nome_arquivo ASC';

        $prog =  Programa::model()->findByPk($idPrograma);
        Log::createLog($prog->ref_programa,'Acessou o Programa', __FUNCTION__);

        $data['praca'] = Praca::model()->findByPk($idPraca);
        $data['veiculo'] = Veiculo::model()->findByPk($idVeiculo);
        $data['tag'] = $data['veiculo']['tags'][0];
        $data['model'] = new Arquivo;
        $data['programa'] =$prog;
        $data['arquivos'] = Arquivo::model()->findAll($criteria);
        $data['coresNotes'] = $this->coresNotes();
        //$data['menu']= "analises";  //comerical ||estudos || analises
        $this->renderPartial('pages/programa', $data, false, true);


    }


    public function actionPraca($id)
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $v = Veiculo::model()->findByPk($id);;
        $data['id'] = (int)$id;
        $data['tag'] = $v->tags[0];
        $data['veiculo'] = $v;



        $this->renderPartial('pages/pracas', $data, false, true);
    }

    public function actionAnalise($id, $veiculo=0, $praca=0)
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $anal = Analise::model()->findByPk($id);

        Log::createLog($anal->ref_analise,'Acessou a Análise', __FUNCTION__);

        if($veiculo==0){
            $veiculo = $anal->veiculos[0]->id_veiculo;
            $praca = $anal->veiculos[0]->pracas[0]->id_praca;

        }

        switch ($anal->tipo_analise){
            case 'painel':
            case 'painel_1200':
            $data['link'] = $this->get_trusted_url($anal['descricao_analise']);

                break;
            default:
                $data['link'] = $anal['descricao_analise'];
                break;

        }



        // $data['link'] = 'http://uol.com.br';
        $data['analise_selecionada'] = $anal;
        $data['link_tipo'] = $anal->tipo_analise;
        $data['remote'] = $_SERVER['REMOTE_ADDR'];
        $data['veiculo'] = $veiculo;
        $data['praca'] = $praca;
        $data['nome'] = $anal['nome_analise'];
        $this->renderPartial('pages/analise', $data, false, true);

    }

    public function actionUploadFile()
    {

        //$this->redirect(array('view', 'id' => $model->id_arquivo));
        //criando historico
        $model = Arquivo::model()->findByPk($_POST['Arquivo']['id_arquivo']);
        $label = get_class($model);

        $hist = new ArquivoHistorico;
        $hist->fk_id_arquivo = $model->id_arquivo;
        $hist->usuario = $model->usuario;
        $hist->data = $model->data;
        $hist->ref_arquivo = $model->ref_arquivo;
        $hist->nome_arquivo = $model->nome_arquivo;
        Log::createLog($model->ref_arquivo,'Fez Upload pelo Frontend', __FUNCTION__);

        $model->usuario = Yii::app()->user->getName();
        $model->data = date('Y-m-d h:i:s', time());
        $model->save();
        if ($model->getBaseTag() == 'vimeo' || $model->getBaseTag() == 'youtube') {
            $hist->caminho_arquivo = $model->caminho_arquivo;
            $model->caminho_arquivo = $_POST['Arquivo']['caminho_arquivo'];
            $hist->save();
            $model->save();
        } else {
            $histPAth = '../uploads/' . strtolower($label) . '/' . strtolower($model->ref_arquivo) . '/hist/';
            if (!file_exists($histPAth) && !is_dir($histPAth)) {
                mkdir($histPAth);
            }
            $path_parts = pathinfo($model->caminho_arquivo);
            $hist->caminho_arquivo = $histPAth . '__' . microtime(true) . '_' . $path_parts['basename'];
            $hist->save();
            if (copy($model->caminho_arquivo, $hist->caminho_arquivo)) {
                if (file_exists($model->caminho_arquivo))  unlink($model->caminho_arquivo);
            }
            $img = CUploadedFile::getInstanceByName('Arquivo[image]');
            $img->saveAs($model->caminho_arquivo);
        }


        $data['res'] = true;
        $this->renderPartial('pages/uploadResult', $data);
    }

    public function actionListVeiculos($id)
    {
        Yii::app()->clientScript->scriptMap['jquery.js'] = false;
        $data['id'] = (int)$id;
        $data['tag'] = Tag::model()->findByPk($id);;

        $this->renderPartial('pages/listVeiculos', $data, false, true);
    }

    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

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

    public function actionLogin()
    {
        $CAPTCHA_TENTATIVAS = 3;
        $this->pageTitle = 'IM Bandeirantes';


        if(!isset( Yii::app()->session['tentativas'])) Yii::app()->session['tentativas']=1;
        else  Yii::app()->session['tentativas'] =  Yii::app()->session['tentativas']+1;

        $session_tentativas =  Yii::app()->session['tentativas'];

        $session_cod_seguranca = strtoupper(Yii::app()->session['cod_seguranca']);

        $cod_seguranca = '';
        if (isset($_POST['LoginForm'])){

                $cod_seguranca = strtoupper($_POST['LoginForm']['cod_seguranca']);

        }

        $model = new LoginForm;



        if($session_tentativas>$CAPTCHA_TENTATIVAS &&  $session_cod_seguranca != $cod_seguranca ){

            if($session_cod_seguranca != $cod_seguranca){
                $this->layout = 'metronicLogin';
                $this->render('login', array('model' => $model, 'exibir_captcha'=> $session_tentativas >  $CAPTCHA_TENTATIVAS,
                    'tent'=> $session_tentativas, 'session_seg'=>$session_cod_seguranca, 'cod_seg'=>$cod_seguranca));
                Yii::app()->end();
            }

            if (isset($_POST['LoginForm'])) {
                $model->attributes = $_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if ($model->validate() && $model->login())
                    $this->redirect(Yii::app()->user->returnUrl);
            }
            $this->layout = 'metronicLogin';
            $this->render('login', array('model' => $model, 'exibir_captcha'=> $session_tentativas >  $CAPTCHA_TENTATIVAS,
                'tent'=> $session_tentativas, 'session_seg'=>$session_cod_seguranca, 'cod_seg'=>$cod_seguranca));
            Yii::app()->end();
        }



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
        $this->render('login', array('model' => $model,'exibir_captcha'=> $session_tentativas >  $CAPTCHA_TENTATIVAS,
            'tent'=> $session_tentativas, 'session_seg'=>$session_cod_seguranca, 'cod_seg'=>$cod_seguranca));

    }

    public function actionLogout()
    {
        Log::createLog('logout','Terminou aplicação', __FUNCTION__);

        Yii::app()->user->logout();
        Yii::app()->session['tentativas'] = 0;
        $this->redirect(Yii::app()->homeUrl);
    }


    public function actionImgbuilder() {


        // is NOT case-sensitive.
        $acceptedChars = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';

        // Number of characters in image.
        $stringlength = 5;


        // color contrast
        $contrast = 60;

        //  obfuscation.
        $num_polygons = 3;
        $num_ellipses = 6;
        $num_lines = 0;
        $num_dots = 0;

        $min_thickness = 2;
        $max_thickness = 8;
        $min_radius = 5;
        $max_radius = 15;

        // 0--127
        $object_alpha = 75;

        // ============= //
        // SETTINGS, FIM //
        // ============= //


        // Keep #'s reasonable.
        $min_thickness = max(1,$min_thickness);
        $max_thickness = min(20,$max_thickness);
        // Make radii into height/width
        $min_radius *= 2;
        $max_radius *= 2;
        // Renormalize contrast
        $contrast = 255 * ($contrast / 100.0);
        $o_contrast = 1.3 * $contrast;

        $width = 15 * imagefontwidth (5);
        $height = 2.5 * imagefontheight (5);
        $image = imagecreatetruecolor ($width, $height);
        imagealphablending($image, true);
        //$black = imagecolorallocatealpha($image,0,0,0,0);

        // Build the  validation string
        $max = strlen($acceptedChars)-1;
        $password = NULL;
        for($i=0; $i < $stringlength; $i++) {
            $cnum[$i] = $acceptedChars{mt_rand(0, $max)};
            $password .= $cnum[$i];
        }

        // Add string to image
        //$rotated = imagecreatetruecolor (70, 70);
        $x = 0;
        for ($i = 0; $i < $stringlength; $i++) {
            $buffer = imagecreatetruecolor (20, 20);
            $buffer2 = imagecreatetruecolor (40, 40);

            // Get a random color
            $red = mt_rand(0,255);
            $green = mt_rand(0,255);
            $blue = 255 - sqrt($red * $red + $green * $green);
            $color = imagecolorallocate ($buffer, $red, $green, $blue);

            // Create character
            imagestring($buffer, 5, 0, 0, $cnum[$i], $color);

            // Resize character
            imagecopyresized ($buffer2, $buffer, 0, 0, 0, 0, 25 + mt_rand(0,12), 25 + mt_rand(0,12), 20, 20);

            // Rotate characters a little
            $rotated = imagerotate($buffer2, mt_rand(-25, 25),imagecolorallocatealpha($buffer2,0,0,0,0));
            imagecolortransparent ($rotated, imagecolorallocatealpha($rotated,0,0,0,0));

            // Move characters around a little
            $y = mt_rand(1, 3);
            $x += mt_rand(2, 6);
            imagecopymerge ($image, $rotated, $x, $y, 0, 0, 40, 40, 100);
            $x += 22;

            imagedestroy ($buffer);
            imagedestroy ($buffer2);
        }

        // Draw polygons
        if ($num_polygons > 0) for ($i = 0; $i < $num_polygons; $i++) {
            $vertices = array (
                mt_rand(-0.25*$width,$width*1.25),mt_rand(-0.25*$width,$width*1.25),
                mt_rand(-0.25*$width,$width*1.25),mt_rand(-0.25*$width,$width*1.25),
                mt_rand(-0.25*$width,$width*1.25),mt_rand(-0.25*$width,$width*1.25)
            );
            $color = imagecolorallocatealpha ($image, mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), $object_alpha);
            imagefilledpolygon($image, $vertices, 3, $color);
        }

        // Draw random circles
        if ($num_ellipses > 0) for ($i = 0; $i < $num_ellipses; $i++) {
            $x1 = mt_rand(0,$width);
            $y1 = mt_rand(0,$height);
            $color = imagecolorallocatealpha ($image, mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), $object_alpha);
            //	$color = imagecolorallocate($image, mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), mt_rand(0,$o_contrast));
            imagefilledellipse($image, $x1, $y1, mt_rand($min_radius,$max_radius), mt_rand($min_radius,$max_radius), $color);
        }

        // Draw random lines
        if ($num_lines > 0) for ($i = 0; $i < $num_lines; $i++) {
            $x1 = mt_rand(-$width*0.25,$width*1.25);
            $y1 = mt_rand(-$height*0.25,$height*1.25);
            $x2 = mt_rand(-$width*0.25,$width*1.25);
            $y2 = mt_rand(-$height*0.25,$height*1.25);
            $color = imagecolorallocatealpha ($image, mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), $object_alpha);
            imagesetthickness ($image, mt_rand($min_thickness,$max_thickness));
            imageline($image, $x1, $y1, $x2, $y2 , $color);
        }

        // Draw random dots
        if ($num_dots > 0) for ($i = 0; $i < $num_dots; $i++) {
            $x1 = mt_rand(0,$width);
            $y1 = mt_rand(0,$height);
            $color = imagecolorallocatealpha ($image, mt_rand(0,$o_contrast), mt_rand(0,$o_contrast), mt_rand(0,$o_contrast),$object_alpha);
            imagesetpixel($image, $x1, $y1, $color);
        }

        Yii::app()->session['cod_seguranca'] = $password;

        header('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);

    }
}