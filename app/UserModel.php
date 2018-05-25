<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use \Illuminate\Database\Eloquent\Model;

/**
 * Description of UserModel
 *
 * @author haris-zafar
 */
class UserModel extends Model {

    protected $table = 'users';

    public function userschools() {
        return $this->hasMany('App\School', 'userId', 'id');
    }

}
