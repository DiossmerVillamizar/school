<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable=['nombre','codigo_escolar'];
    protected $hidden=['created_at','updated_at'];
}
