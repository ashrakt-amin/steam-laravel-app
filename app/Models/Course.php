<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Course extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['title'];

    protected $fillable =['image','levels','order','view','duration'];
    public $timestamps = false;

    
    public function contents(){
        return $this->hasMany(CourseContent::class,);
    }

    public function objectives(){
        return $this->hasMany(CourseObjective::class);
    }

    public function languages(){
        return $this->belongsToMany(
            Language::class ,//related model
            'language_course' , //pivot table
            'course_id',//FK in pivot table for current model
            'language_id',//FK in pivot table for related model
            'id',           //PK for current model
            'id'            //PK for related model

        );
    }


   
    

    public function getImageUrlAttribute(){
     
      if($this->image !== null){
        return asset('dashboard/img/courses/'.$this->image);
        } else {
            return asset('dashboard/img/courses/default.png');
        }
}


}

