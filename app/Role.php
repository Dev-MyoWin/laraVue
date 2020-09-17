<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['roleName','permission','role_id'];
    public function users(){
        return $this->hasMany('App\User');
    }
}
