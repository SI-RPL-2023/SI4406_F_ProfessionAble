<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelamar extends Model
{
    use HasFactory;

    protected $table = "users";
    
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function apply()
    {
        return $this->hasMany(Apply::class);
    }

}
