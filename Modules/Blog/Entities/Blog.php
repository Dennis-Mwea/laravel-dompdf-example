<?php

namespace Modules\Blog\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
