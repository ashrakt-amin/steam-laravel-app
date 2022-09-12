<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class CourseObjective extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['objective'];
    protected $fillable=['course_id'];
    use HasFactory;
    
    public function course(){
        return $this->belongsTo(Course::class);
    }
}