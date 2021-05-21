<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'dept_id'];

    public function departments()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }

    public function instructionalResources()
    {
        return $this->hasMany(InstructionalResource::class, 'subject_id', 'id');
    }
}
