<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "number".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $occupation
 * @property string $address
 * @property int $p1
 * @property string $email
 */
class Number extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'number';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'occupation', 'address', 'p1', 'email'], 'required'],
            [['p1'], 'integer'],
            [['first_name', 'last_name', 'occupation', 'address'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'occupation' => 'Occupation',
            'address' => 'Address',
            'p1' => 'P1',
            'email' => 'Email',
        ];
    }
}
