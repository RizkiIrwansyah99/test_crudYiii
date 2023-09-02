<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id
 * @property string $name
 * @property string $email_address
 * @property string $phone_number
 * @property string $address
 */
class Profil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email_address', 'phone_number', 'address'], 'required'],
            [['name', 'email_address'], 'string', 'max' => 50],
            [['phone_number'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email_address' => 'Email Address',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
        ];
    }
}
