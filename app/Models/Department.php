<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'abbv'];

    public function usersInformation()
    {
        return $this->hasMany(UsersInformation::class, 'dept_id', 'id');
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'dept_id', 'id');
    }
}
