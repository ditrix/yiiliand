<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Page */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'блок будет удален. вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
			'title',
			[
				'attribute' => 'content',
				'value' => $model->content,
				'format' => 'html'	
			],
            'sort_index',			
			[
				'attribute' => 'fos_use',
				'value' => $model->fos_use ? '<span class="text-success">да</span>':'<span class="text-danger">нет</span>',
				'format' => 'html',
				
			],
			[
				'attribute' => 'published',
				'value' => $model->published ? '<span class="text-success">да</span>':'<span class="text-danger">нет</span>',
				'format' => 'html',
				
			],	
			[
				'attribute' => 'use_maket_content',
				'value' => $model->use_maket_content ? '<span class="text-success">да</span>':'<span class="text-danger">нет</span>',
				'format' => 'html',
				
			],				
			'template_file',
			'fos_title',
			[

				'attribute' => 'fos_name_use',
				'value' => $model->fos_name_use ? '<span class="text-success">да</span>':'<span class="text-danger">нет</span>',
				'format' => 'html',
				
			],				
			'fos_name_label',			 
			[
				'attribute' => 'fos_phone_use',
				'value' => $model->fos_phone_use ? '<span class="text-success">да</span>':'<span class="text-danger">нет</span>',
				'format' => 'html',
				
			],					
			'fos_phone_label',
			[
				'attribute' => 'fos_email_use',
				'value' => $model->fos_email_use ? '<span class="text-success">да</span>':'<span class="text-danger">нет</span>',
				'format' => 'html',
				
			],					
			'fos_email_label',
			'fos_email_to',
			'fos_email_subj',
			'fos_commit_label',
        ],
    ]) ?>

</div>
