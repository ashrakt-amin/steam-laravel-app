<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable; 


class Team extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes =  ['name','position'];
    public $fillable = ['image'];


    public function getImageUrlAttribute(){
     
        if($this->image !== null){
          return asset('dashboard/img/team/'.$this->image);
          } else {
              return asset('dashboard/img/team/default.png');
          }
  }

}
