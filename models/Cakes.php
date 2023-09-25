<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cakes".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $flavor
 */
class Cakes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cakes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'flavor'], 'string', 'max' => 100],
            [['id'], 'unique'],
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
            'flavor' => 'Flavor',
        ];
    }
}
