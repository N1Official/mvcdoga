<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function hasMany($related, $foreignKey = "house_id", $localKey = "id")
    {

    }
}
