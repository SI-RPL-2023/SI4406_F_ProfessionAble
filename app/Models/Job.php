<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function scopeFilter( $query, $job )
    {
        $query->when($job["search"] ?? false, function($query, $cari) {
            return $query->where('name', 'like', '%' . $cari . '%');
        } );
        
    }
    public function applies()
    {
        return $this->hasMany(Apply::class);
    }
}
