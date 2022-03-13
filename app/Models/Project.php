<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "projects";
    
    protected $fillable = [
        'city_id',
        'company_id',
        'user_id',
        'budget',
        'name',
        'execution_date',
    ];

    //Guarda un valor por defecto para los atributos especificados
    /* protected $attributes = [
        'name' => 'hola',
    ]; */
}
