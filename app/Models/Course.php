<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'writer_id',
        'category_id',
        'content',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke Writer
    public function writer():BelongsTo
    {
        return $this->belongsTo(Writer::class);
    }

      protected $casts = [
        'published_at' => 'datetime',
    ];
}
