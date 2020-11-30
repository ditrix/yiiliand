<?php
 use yii\helpers\Html;
 use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="row">
<div class="logo text-left col-sm-4"><h3>LOGO<h3></div>
<div class="logo text-center col-sm-4"><h4><?=$settings->company;?></h4></div>
<div class="logo text-right col-sm-4"><h3><?=$settings->phone_1;?></h3></div>
</div>
<div class="row">
	<div class="container">
		<?php foreach($pages as $page):?>		
		<div class="page-<?=$page->id?> page-block debug clearfix" >
		<div class="col-sm-1"></div>
		<div class="col-sm-10 text-center">
			
<?php if($page->use_maket_content ): ?>
<?php require_once dirname(__FILE__)."/../template/{$page->template_file}";?>
<?php else:?>
		<div class="content">
			<?=$page->content?>				
		</div>			
	<?php if($page->fos_use): ?>	
<div class="fos_btn_container text-center">		
	<button id="fos_btn_<?=$page->id?>" onclick="$('#fos_modal_dialog_<?=$page->id?>').modal()" type="button" class="btn btn-primary"><?=$page->fos_btn_label?></button>
</div>		
	
	<div id="fos_modal_dialog_<?=$page->id?>" class="modal fade" tabindex="-1" role="dialog">  
		<div class="modal-dialog">
			<div class="modal-content">
                <div class="modal-header">
                    <div class="col-sm-11 fos_title"><?=$page->fos_title?></div>
                    <div class="col-sm-1" data-dismiss="modal" id="ref_close_fos"><h2>X</h2></div>                
                </div>
                <div class="modal-body">
				 <?php $form = ActiveForm::begin(); ?>	
                  <!--  <form id="myForm" action="mail_fos.php" method="post"> -->
						<?= Html::hiddenInput('сhcode', 'gjnjkjrlkzDfc')?>
						<?= Html::hiddenInput('subj', $page->fos_email_subj)?>
						<?= Html::hiddenInput('subj', $page->fos_email_to)?>
						
					<?php if($page->fos_name_use): ?>
						<div class="form-group"> 
						<?=$page->fos_name_label;?>
						<?=  Html::input('text', 'name', '', ['placeholder' => '','size' => '50']) ?>
						</div>	
					<?php endif;?>
						
					<?php if($page->fos_phone_use): ?>
						<div class="form-group"> 
						<?=$page->fos_phone_label;?>
						<?=  Html::input('text', 'phone', '', ['placeholder' => '','size' => '50']) ?>
						</div>	
					<?php endif;?>
						
					<?php if($page->fos_email_use): ?>
						<div class="form-group"> 
						<?=$page->fos_email_label;?>
						<?=  Html::input('email', 'email', '', ['placeholder' => '','size' => '50']) ?>
						</div>	
					<?php endif;?>
						
					<?php if($page->fos_comm_use): ?>
						<div class="form-group"> 
						<?=$page->fos_comm_label;?>
						<?=  Html::textarea('comment', '',['cols' => '50']);
						?>
						</div>	
					<?php endif;?>						
				<div class="form-group">
					<?= 	Html::submitButton($page->fos_commit_label, ['class'=>'btn btn-primary']);	?>
				</div>
               <!-- </form>        -->
			    <?php ActiveForm::end(); ?>
                 </div>    
                 <div class="modal-footer"></div>
			</div>	
		</div>
	</div>
  
			
	<?php endif; ?>	
	
			
<?php endif; ?>
		</div>	
		<div class="col-sm-1"></div>
		</div>
		<?php endforeach;?>
	</div>
</div>