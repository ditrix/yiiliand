<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property integer $sort_index
 * @property integer $fos_use
 * @property integer $fos_id
 * @property string $published
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['name'], 'required'], 
            [['sort_index', 'fos_use','published','use_maket_content',
			'fos_name_use','fos_phone_use',	'fos_email_use','fos_comm_use'], 'integer'],
            [['name','template_file','fos_btn_label', 'title',
				'fos_title', 'fos_name_label', 'fos_phone_label','fos_email_label',
				'fos_comm_label', 'fos_commit_label', 'fos_email_to','fos_email_subj'
			], 'string', 'max' => 255],
			[['content'],'string'],
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'название блока',
			'title' => 'заголовок',
            'sort_index' => 'сорт',			
			'use_maket_content' => 'использовать внешний макет',
			'template_file' => 'файл внешнего макета',
			'content' => 'конент',
			'published' => 'опубликовано',
			'fos_use' => 'использовать фос',
			'fos_btn_label' => 'надпись на кнопке активации фос',
        /*  настройки фос*/			
			'fos_title' => 'заголовок фос',
			'fos_name_use' => 'запрашивать имя',
			'fos_name_label' => 'заголовок имя',
			'fos_phone_use' => 'запрашивать телефон',
			'fos_phone_label' => 'заголовок телефон',
			'fos_email_use' => 'запрашивать email',
			'fos_email_label' => 'заголовок email',
			'fos_comm_use' => 'запрашивать коментарий',
			'fos_comm_label' => 'заголовок коментарий',
			'fos_commit_label' => 'надпись на кнопке "отправить"',
			'fos_email_to' => 'получатель фос сообщения',
			'fos_email_subj' => 'тема фос сообщения',
        ];
    }
}
