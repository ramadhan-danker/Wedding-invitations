<?php

namespace App\Models;

use App\Models\Undangan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Theme extends Model
{
    use HasFactory;

    public function undangan()
    {
        return $this->hasMany(Undangan::class);
    }
}
