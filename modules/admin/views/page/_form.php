<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use mihaildev\ckeditor\CKEditor;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>
<script>
	function clickPage(id){
		if(id === 'main_panel'){
			$('#fos-parameters').css('display','none');
			$('#main-parameters').css('display','block');
		}
		if(id === 'fos_panel'){
			$('#fos-parameters').css('display','block');
			$('#main-parameters').css('display','none');
		}
		
	}
	
</script>	

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>
	<div>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	</div>	
	
<div class="form-nav clearfix col-sm-6">
<ul class="nav-tabs navbar-left nav-page-item nav">
	<li id="main_panel"><a href="#" onclick="clickPage('main_panel'); return false;">Содержимое блока</a></li>
	<li id="fos_panel"><a href="#" onclick="clickPage('fos_panel'); return false;">Форма обратной связи</a></li>
</ul>
</div>	
    <div class="form-group col-sm-6">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
<div class="form-content clearfix">
	<div id="main-parameters">		
		<?= $form->field($model, 'title')->textInput() ?>
		
<?=
$form->field($model, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'standart', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);

?>
		
		

		<?= $form->field($model, 'use_maket_content')->checkbox(['0','1']) ?>
		<?= $form->field($model, 'template_file')->textInput() ?>
		
		<?= $form->field($model, 'sort_index')->textInput() ?>
		<?= $form->field($model, 'published')->checkbox(['0','1']); ?>
	</div>
		
	<div id="fos-parameters">	
		<div class="row">
		<div class="col-sm-3">
		<?= $form->field($model, 'fos_use')->checkbox(['0','1']); ?>
		</div>
		<div class="col-sm-9">	
		<?= $form->field($model, 'fos_title')->textInput() ?>
		</div>	
		</div>
		<?= $form->field($model, 'fos_btn_label')->textInput() ?>
		<?= $form->field($model, 'fos_name_use')->checkbox(['0','1']); ?>
		<?= $form->field($model, 'fos_name_label')->textInput() ?>

		<?= $form->field($model, 'fos_phone_use')->checkbox(['0','1']); ?>
		<?= $form->field($model, 'fos_phone_label')->textInput() ?>

		<?= $form->field($model, 'fos_email_use')->checkbox(['0','1']); ?>
		<?= $form->field($model, 'fos_email_label')->textInput() ?>
		
		<?= $form->field($model, 'fos_comm_use')->checkbox(['0','1']); ?>
		<?= $form->field($model, 'fos_comm_label')->textInput() ?>
		

		<?= $form->field($model, 'fos_email_to')->textInput() ?>
		<?= $form->field($model, 'fos_email_subj')->textInput() ?>
		<?= $form->field($model, 'fos_commit_label')->textInput() ?>

	</div> <!-- eof #fos-parameters -->
	
</div>	
    <?php ActiveForm::end(); ?>

</div>
