<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dai extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'poin', 'pelangaran'];
}
