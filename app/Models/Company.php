<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $Primarykey = 'id';


    protected $fillable=[
        'name',
        'nit',
        'address',
        'logo'
    ];
}