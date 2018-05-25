<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use \Illuminate\Database\Eloquent\Model;

/**
 * Description of School
 *
 * @author haris-zafar
 */
class School extends Model {

    protected $table = 'school';
    protected $primaryKey = 'schoolId';

    public function principle() {
        return $this->belongsTo('App\UserModel', 'userId');
    }

    public function buses() {
        return $this->hasMany('App\Assignedbuses', 'schoolId', 'schoolId');
    }

}
