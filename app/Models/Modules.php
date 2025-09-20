<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_name',
        'module_prefix',
        'is_active',
        'is_landing_dashboard'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_landing_dashboard' => 'boolean'
    ];
}
