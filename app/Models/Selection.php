<?php

namespace App\Models;

use App\Models\Supervisor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Selection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'class_name',
        'group_member_1',
        'group_member_2',
        'group_member_3',
        'supervisor_id',
    ];
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
}
