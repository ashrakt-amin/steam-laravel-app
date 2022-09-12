<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContentTranslation extends Model
{
    protected $fillable = ['content'];
    public $timestamps = false;
}
