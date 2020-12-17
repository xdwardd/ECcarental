<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //
    protected $fillable = ['fullname', 'email', 'phone', 'address', 'objective'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
