<?php

namespace Zaizainal\CustomAuth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'is_publish'
    ];
}
