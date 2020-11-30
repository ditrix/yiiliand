<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\admin\controllers;
use app\modules\admin\models\Settings;
use Yii;
use yii\web\Controller;
/**
 * Description of SettingsController
 *
 * @author Ditrix
 */
class SettingsController extends Controller{
	//put your code here
	
	public function actionIndex(){
		

  //  $model = new app\modules\admin\models\Settings();
//	$data = new Settings();
/*    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

*/
//	$model = $this->data->find()->all();
	$model = Settings::findOne(['id'=> '1']);
			
			//::find()->all();
  // debug($model);

    if ($model->load(Yii::$app->request->post())) $model->save();
	
    return $this->render('settings', [
        'model' => $model,
    ]);
	
	}
	
   public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('settings', [
                'model' => $model,
            ]);
        }
    }	
	
}
