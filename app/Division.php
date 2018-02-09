<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table =['divisiones'];

    protected $fillable=['dividendo','divisor','resultado'];

    public function tieneDivisor(){
        return $this->divisor;
    }
}
