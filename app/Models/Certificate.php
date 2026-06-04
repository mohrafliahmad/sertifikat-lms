<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Certificate extends Model
{
    protected $fillable = [

        'uuid',

        'certificate_number',

        'name',

        'nik'

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($certificate) {

            $certificate->uuid =
                (string) Str::uuid();

        });
    }
}