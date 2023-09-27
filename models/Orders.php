<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property int|null $phone_number
 * @property string|null $type_cake
 * @property string|null $type_flavor
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number'], 'integer'],
            [['type_cake', 'type_flavor'], 'string'],
            [['firstname', 'lastname'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone_number' => 'Phone Number',
            'type_cake' => 'Type Cake',
            'type_flavor' => 'Type Flavor',
        ];
    }
}
