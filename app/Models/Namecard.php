<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Namecard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'companyname',
        'path',
    ];
}
