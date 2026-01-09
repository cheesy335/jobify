<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'salary',
        'location',
        'shift',
        'url',
        'featured'
    ];

    public function employer(): BelongsTo {
        return $this->belongsTo(Employer::class);
    }
}
