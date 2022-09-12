<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable; 

class CourseContent extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['content'];
    protected $fillable=['course_id'];
   
    public function course(){
        return $this->belongsTo(Course::class);
    }
}