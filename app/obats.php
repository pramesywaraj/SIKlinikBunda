<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obats extends Model
{
    public $timestamps = true;
    //protected $primaryKey='idObat';

     protected $fillable = [
         'id','namaObat', 'harga', 'stock'
     ];
}
