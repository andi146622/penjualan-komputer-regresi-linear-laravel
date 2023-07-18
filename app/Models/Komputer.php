<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;

    protected $fillable = [
        'merek',
        'bulan',
        'tahun',
        'jumlah',
    ];

    protected function id(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => encrypt($value)
        );
    }

    protected function merek(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtoupper($value)
        );
    }
}
