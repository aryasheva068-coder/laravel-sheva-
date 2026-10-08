<?php

namespace App\Models;

use Illuminete\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    use HasFactory;

    protected $table = "projects";

    protected $fillable = [
        'title',
        'description',
        'teknologi',
        'image',
        'status',
    ];
}

