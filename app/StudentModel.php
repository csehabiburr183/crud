<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table='students';
    protected $fillable=['name','roll','dept','age','phone'];
}
