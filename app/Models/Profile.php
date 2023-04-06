<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profiles";

    // protected $fillable = [
    //     'description',
    //     'name',
    //     'gender',
    //     'phone_number',
    //     'email',
    //     'education'
    // ];

    protected $guarded = [];
}
