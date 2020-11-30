<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'администратор';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('добавить блок', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			['attribute' => 'name',
			 'value' => function($data){
				return 
					Html::a("$data->name", Url::to(["page/view",'id'=>$data->id]));
			 },
			'format' => 'html'				 
			 ],
			'title',
			/*		 
			[
				'attribute' => 'content',
				'value' => function($data){
					return $data->content;
				},
			'format' => 'html'		
			],
			*/			
            'sort_index',
			[
				'attribute' => 'published',
				'value' => function($data){
					return !$data->published ? '<span class="text-danger">нет</span>' :
							'<span class="text-success">да</span>';
					},
				'format' => 'html'	
			],
			[
				'attribute' => 'fos_use',
				'value' => function($data){
					return !$data->fos_use ? '<span class="text-danger">нет</span>' :
							'<span class="text-success">да</span>';
					},
				'format' => 'html'	
			],           
           // ['class' => 'yii\grid\ActionColumn'	],
        ],
    ]); ?>
</div>
