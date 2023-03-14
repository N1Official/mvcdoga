<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function belongsTo($related, $foreignKey = "house_id", $ownerKey = "id", $relation = null)
    {
    }
    public function house($id){
        return $this->belongsTo(HouseModel::class);
    }
}
