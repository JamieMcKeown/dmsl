<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Team;

class Team extends Model
{
    use HasFactory;

   // relationships

   public function Players()
    {
        return $this->hasMany(Player::class);
    }
}
