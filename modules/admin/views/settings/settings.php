<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Settings */
/* @var $form ActiveForm */
?>
<div class="settings debug">

    <?php $form = ActiveForm::begin(); ?>
      <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
        </div>	
	<table >
		<tr>
			<td colspan="4">
        <?= $form->field($model, 'company')->textInput() ?>					
			</td>
		</tr>		
		<tr>
			<td colspan="4">
        <?= $form->field($model, 'addr')->textInput() ?>					
			</td>
		</tr>		
		<tr>
			<th>данные администратора</th>
			<th colspan="3">контактные данные</th>
		</tr>
		<tr valign="top">
			<td>
        <?= $form->field($model, 'admin_login')->textInput() ?>
        <?= $form->field($model, 'admin_pass')->textInput() ?>
        <?= $form->field($model, 'admin_email')->textInput() ?>				
			</td>
			<td>
			<?= $form->field($model, 'phone_1')->textInput() ?>
			<?= $form->field($model, 'phone_2')->textInput() ?>	
				
			</td>
			<td>
			<?= $form->field($model, 'email_1')->textInput() ?>
			<?= $form->field($model, 'email_2')->textInput() ?>
			</td>
			<td>
        <?= $form->field($model, 'skype')->textInput() ?>
        <?= $form->field($model, 'viber')->textInput() ?>
        <?= $form->field($model, 'telegram')->textInput() ?>				
			</td>
		</tr>

		<tr>
			<th colspan="4">ссылки соц сетей</th>
		</tr>
		<tr>
			<td>
        <?= $form->field($model, 'soc_vk_url')->textInput() ?>				
			</td>
			<td>
        <?= $form->field($model, 'soc_fb_url')->textInput() ?>				
			</td>	
			<td>
		<?= $form->field($model, 'soc_ok_url')->textInput() ?>				
			</td>	
			<td>
        <?= $form->field($model, 'soc_twt_url')->textInput() ?>						
			</td>
		</tr>
	</table>

	<?= $form->field($model, 'counters')->textarea(['rows' => '10']); ?>

  
    <?php ActiveForm::end(); ?>

</div><!-- settings -->
