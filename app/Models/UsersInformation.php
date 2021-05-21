<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UsersInformation extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'dept_id', 'user_level_id'];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'id');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }

    public function userLevels()
    {
        return $this->belongsTo(UserLevel::class, 'user_level_id', 'id');
    }
}
