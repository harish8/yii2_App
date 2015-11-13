<?php

namespace backend\models;

use yii\base\Model;

class Status extends Model{

    const PERMISSIONS_PRIVATE = 10;
    const PERMISSIONS_PUBLIC = 20;

    public $text;
    public $permissions;

    public function rules(){
        return[
            [['text','permissions'],required],
        ];

    }

    public function getPermissions(){


    }

    public function getPermissionsLabel(){


    }
}