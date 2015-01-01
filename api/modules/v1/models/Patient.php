<?php

namespace api\modules\v1\models;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "patient".
 *
 * @property string $cid
 * @property string $name
 * @property string $lname
 * @property string $dx
 */
class Patient extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid', 'name', 'lname'], 'required'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'name' => 'Name',
            'lname' => 'Lname',
            'dx' => 'Dx',
        ];
    }
}
