<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    public $timestamps = false;

    // ============= Relationships

    public function topic()
    {
        return $this->belongsTo(Opinion::class);
    }

    public function forumuser()
    {
        return $this->belongsTo(ForumUser::class);
    }
}
