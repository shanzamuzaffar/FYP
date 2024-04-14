<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'class_name',
        'group_member_1',
        'group_member_2',
        'group_member_3',
        'supervisor',
    ];
}
