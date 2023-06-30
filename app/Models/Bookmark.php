<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Namecard;
use App\Models\User;

class Bookmark extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
		public function namecard()
    {
        return $this->belongsTo(Namecard::class);
    }
}
