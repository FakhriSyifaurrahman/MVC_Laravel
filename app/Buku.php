<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $incrementing=false;
    protected $fillable=[
    	"id","judul","pengarang","jumlah"
    ];
}
