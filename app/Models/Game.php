<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_date',
    ];

    public function collections()
    {
        return $this->belongsToMany(Collection::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
