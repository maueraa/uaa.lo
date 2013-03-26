<?php

class NewsController extends Controller
{
	public function actionCeremony()
	{
        $lng = isset($_POST["languagePicker"]) ? $_POST["languagePicker"] : (isset($_COOKIE["language"])?$_COOKIE["language"]:"uz");
        if ($lng==="ru")
        {
            $this->render("ceremonyru");
        }
        elseif ($lng==="en")
        {
            $this->render("ceremonyen");
        }
        else
           	$this->render('ceremony');
	}

	public function actionIndex()
	{
        $lng = isset($_POST["languagePicker"]) ? $_POST["languagePicker"] : (isset($_COOKIE["language"])?$_COOKIE["language"]:"uz");
        if ($lng==="ru")
        {
            $this->render("indexru");
        }
        elseif ($lng==="en")
        {
            $this->render("indexen");
        }
        else
            $this->render('index');
	}

	public function actionLast()
	{
        $lng = isset($_POST["languagePicker"]) ? $_POST["languagePicker"] : (isset($_COOKIE["language"])?$_COOKIE["language"]:"uz");
        if ($lng==="ru")
        {
            $this->render("lastru");
        }
        elseif ($lng==="en")
        {
            $this->render("lasten");
        }
        else
            $this->render('last');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}