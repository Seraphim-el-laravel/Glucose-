<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'gejala_penyakit')->withPivot('cf');
    }
}
