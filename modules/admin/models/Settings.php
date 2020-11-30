<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property string $admin_login
 * @property string $admin_pass
 * @property string $phone_1
 * @property string $phone_2
 * @property string $email_1
 * @property string $email_2
 * @property string $soc_vk_url
 * @property string $soc_fb_url
 * @property string $addr
 * @property string $counters
 * @property string $soc_odn_url
 * @property integer $soc_twt_url
 * @property string $skype
 * @property string $viber
 * @property string $telegram
 * @property string $admin_email
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['id'], 'required'],
            [['counters'], 'string'],
            [['soc_twt_url'], 'integer'],
            [['admin_login', 'admin_pass', 'phone_1', 'phone_2', 'email_1', 'email_2', 
			'soc_vk_url', 'soc_fb_url', 'soc_twt_url', 'soc_ok_url', 'company',
			'addr','skype', 'viber', 'telegram', 'admin_email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
			'company' => 'название',
            'admin_login' => 'логин',
            'admin_pass' => 'пароль',
			'admin_email' => 'email администратора',
            'phone_1' => 'тел 1.',
            'phone_2' => 'тел 1.',
            'email_1' => 'email 1',
            'email_2' => 'email 2',
            'soc_vk_url' => 'vkontakte',
            'soc_fb_url' => 'facebook',
           'soc_ok_url' => 'odnoklasniki',
            'soc_tw_url' => 'twitter',			
            'addr' => 'адрес',
            'skype' => 'skype',
            'viber' => 'viber',
            'telegram' => 'telegram',
            'counters' => 'seo счетчики',			
        ];
    }
}
/*

for debug
INSERT INTO `settings` (`id`, `admin_login`, `admin_pass`, `phone_1`, `phone_2`, `email_1`, `email_2`, `soc_vk_url`, `soc_fb_url`, `addr`, `counters`, `soc_odn_url`, `soc_twt_url`, `skype`, `viber`, `telegram`, `admin_email`) VALUES
(1, 'admin', 'admin', '+380660646332', '+380660646000', 'site1@mail.com', NULL, 'http:://vk.com/', 'http:://fb.com/', 'адрес', 'сео', NULL, NULL, 'adminskype', '+380660646332', '+380660646332', 'admin@mail.com');

  */