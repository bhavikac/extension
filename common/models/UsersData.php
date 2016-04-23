<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "users_data".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_email
 * @property integer $user_mo_no
 * @property string $user_city
 */
class UsersData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_email', 'user_mo_no', 'user_city'], 'required'],
            [['user_mo_no'], 'integer'],
            [['user_name', 'user_email', 'user_city'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_email' => 'User Email',
            'user_mo_no' => 'User Mo No',
            'user_city' => 'User City',
        ];
    }
}
