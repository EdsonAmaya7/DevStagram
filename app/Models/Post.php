<?php

namespace App\Models;


use App\Models\like;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class)->select(['name','username']);
    }

    public  function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function likes()
    {
        return $this->hasMany(like::class);
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }
}
