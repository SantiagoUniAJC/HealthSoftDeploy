<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'path_formato'];

    public function getFormatoPathAttribute()
    {
        return asset('storage/' . $this->path_formato);
    }
}
