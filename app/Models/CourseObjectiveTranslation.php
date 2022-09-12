<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseObjectiveTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['objective'];
    public $timestamps = false;
}
