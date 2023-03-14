<?php

namespace App\Models;

use Database\Seeders\CharacterSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function character(): HasMany
    {
        return $this->hasMany(Character::class, 'house_id', 'id');
    }
}
