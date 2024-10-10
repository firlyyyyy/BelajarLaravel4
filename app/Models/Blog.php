<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'penulis_id',
        'slug',
        'isi'
    ];

    protected $with = ['penulis'];

    protected static function boot()
    {
        parent::boot();

        Carbon::setLocale('id');
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->translatedFormat('l, d F Y');
    }

    public function penulis(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
