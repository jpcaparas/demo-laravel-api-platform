<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
