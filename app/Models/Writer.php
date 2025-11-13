<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'bio'
    ];

    public function courses():HasMany
    {
        return $this->hasMany(Course::class);
    }
}
