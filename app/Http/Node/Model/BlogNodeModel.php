<?php

namespace App\Http\Node\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BlogNodeModel extends Model
{
    protected $table = "blog";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
