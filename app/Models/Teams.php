<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teams extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'teamName',
        'department',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Posts::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(Users::class);
    }
}
