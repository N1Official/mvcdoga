<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function post(): BelongsTo
    {
        return $this->belongsTo(House::class, "house_id","id");
    }
}
