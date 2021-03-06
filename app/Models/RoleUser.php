<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'role_id',
        'user_id'
    ];
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }



}