<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficheiros extends Model
{
    use HasFactory;
    protected $fillable=['nome','descricao','tipo','utilizador','file'];
}
