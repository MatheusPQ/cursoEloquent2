<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function likeable(){ //Models que podem ser curtidos são 'likeables'
        return $this->morphTo();
    }
}
