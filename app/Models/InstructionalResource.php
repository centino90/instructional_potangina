<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructionalResource extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'src_path', 'user_id', 'resource_type_id', 'subject_id'];

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function resourceTypes()
    {
        return $this->belongsTo(ResourceType::class, 'resource_type_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
