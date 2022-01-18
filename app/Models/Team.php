<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Team;

class Team extends Model
{
    use HasFactory;

   // relationships

   public function Users()
    {
        return $this->hasMany(User::class);
    }
}
