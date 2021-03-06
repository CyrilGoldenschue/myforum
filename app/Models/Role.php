<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function getName()
    {
        return $this->name;
    }

    public function getRole_User()
    {
        return $this->hasMany('App\Models\RoleUser', 'role_id');
    }


}
