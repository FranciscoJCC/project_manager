<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    
    protected $fillable = [
        'city_id',
        'company_id',
        'user_id',
        'budget',
        'name',
        'execution_date',
    ];
}
