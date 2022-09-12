<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    public $fillable= ['image'];

    public function getImageUrlAttribute(){
     
        if($this->image !== null){
          return asset('dashboard/img/gallery/'.$this->image);
          } else {
              return asset('dashboard/img/courses/default.png');
          }
  }
}
