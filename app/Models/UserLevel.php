<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function usersInformation()
    {
        return $this->hasOne(UsersInformation::class, 'user_level_id', 'id');
    }
}
