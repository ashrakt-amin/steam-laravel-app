<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    protected $fillable = ['title'];
    public $timestamps = false;
}
