<?php

namespace App;

use App\Text;
use App\Image;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;

    public function texts(){ //Retorna lista de textos
        return $this->morphedByMany(Text::class, 'taggable');
    }
    
    public function images(){
        return $this->morphedByMany(Image::class, 'taggable');
    }
}
