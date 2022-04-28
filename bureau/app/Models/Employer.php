<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';
    protected $primaryKey = 'id';
    protected $fillable =[
        'Nom' ,
        'Prénom',
        'age' ,
        'code_employer'
    ];
}
