<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $message
 * @property integer $permissions
 * @property integer $created_at
 * @property integer $updated_at
 */
class Status extends \yii\db\ActiveRecord
{
    const PERMISSION_PRIVATE = 10;
    const PERMISSION_PUBLIC = 20;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'created_at', 'updated_at'], 'required'],
            [['message'], 'string'],
            [['permissions', 'created_at', 'updated_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'permissions' => 'Permissions',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return array
     */
    public function getPermission(){

        return array(self::PERMISSION_PRIVATE=>'Private',self::PERMISSION_PUBLIC=>'Public');

    }

    public function getPermissionLabel($permissions){

        if($permissions==self::PERMISSION_PUBLIC){
            return 'Public';
        }
        else{
            return 'Private';
        }

    }
}
