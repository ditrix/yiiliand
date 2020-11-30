<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Pages;
use app\models\Settings;

class PagesController extends Controller
{
	public $title = 'админка';
	    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		
		//$data = new Pages();
		
		$settings = Settings::findOne(['id'=> '1']);
		//debug($settings);
		$pages = Pages::find()->where(['published'=>'1'])->orderBy(['sort_index' => 'ORD_ASC'])->all();
        return $this->render('index',compact('pages','settings'));
    }
}
