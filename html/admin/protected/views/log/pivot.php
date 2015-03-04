<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
/*
 * This file is ready to run as standalone example. However, please do:
 * 1. Add tags <html><head><body> to make a complete page
 * 2. Change relative path in $KoolControlFolder variable to correctly point to KoolControls folder
 */
//header('Content-type: text/html; charset=utf-8');


$KoolControlsFolder = Yii::app()->basePath."/../../KoolPHPSuite/KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder
$KoolControlsFolder2 = Yii::app()->baseUrl."/../../KoolPHPSuite/KoolControls";//Relative path to "KoolPHPSuite/KoolControls" folder

require $KoolControlsFolder."/KoolAjax/koolajax.php";
$koolajax->scriptFolder = $KoolControlsFolder2."/KoolAjax";

require $KoolControlsFolder."/KoolPivotTable/koolpivottable.php";


$db_conx = mysql_connect('localhost','root','Mudar#123', 'im');
if(mysql_select_db('im'))
{
    //  include("example.php");
//    mysql_close($db_con);
    mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $db_conx);
}

$ds = new MySQLPivotDataSource($db_conx);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
//$ds->select(" * ")
//   ->from(" log ");
// ->where("productLine='Classic Cars'")
$ds->selectCommand("select '1' as id_log,usuario_log,acao_log,ref_log  from log");


//var_dump($ds);
$pivot = new KoolPivotTable("pivot");
$pivot->scriptFolder =$KoolControlsFolder2."/KoolPivotTable";
$pivot->styleFolder = $KoolControlsFolder2."/KoolPivotTable/styles/default";;
$pivot->DataSource = $ds;

//Turn on ajax features.
$pivot->AjaxEnabled = true;



//Set the Width of pivot and use horizontal scrolling
$pivot->Width = "100%";
$pivot->HorizontalScrolling = true;

//Set the Height of pivot and use Vertical Scrolling
$pivot->Height = "500px";
$pivot->VerticalScrolling = true;

//Allow filtering
$pivot->AllowFiltering = true;
//Allow sorting
$pivot->AllowSorting = true;
//Allow reordering
$pivot->AllowReorder = true;


//Make the RowHeader wider.
$pivot->Appearance->RowHeaderMinWidth = "250px";

//Use the Prev and Next Numneric Pager
$pivot->Pager = new PivotPrevNextAndNumericPager();
$pivot->Pager->PageSize = 40;

//Turn on caching to help pivot working faster.
$pivot->AllowCaching = true;


//Data Field
$field = new PivotSumField("id_log");
$field->Text = "ID";
$field->FormatString = "{n}";
//$field->AllowReorder = false;
$pivot->AddDataField($field);

//Row Fields
$field = new PivotField("usuario_log");
$field->Text = "Ususario";
$pivot->AddRowField($field);

//Column Fields
$field = new PivotField("acao_log");
$field->Text = "Acao";
$pivot->AddColumnField($field);

$field = new PivotField("ref_log");
$field->Text = "Ref";
$pivot->AddRowField($field);


//Process the pivot
$pivot->Process();

?>

<form id="form1" method="post">
    <?php echo $koolajax->Render();?>
    <div >
        <?php echo $pivot->Render();?>
    </div>

</form>
