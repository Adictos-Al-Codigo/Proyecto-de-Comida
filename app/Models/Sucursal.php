<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table= 'sucursal';
    public $timestamps =false;
    public $fillable = ['Nombre','id_local'];
}
