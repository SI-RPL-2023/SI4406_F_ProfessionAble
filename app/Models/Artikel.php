<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $guarded = [];

    public function scopeFilter( $query, $artikel )
    {
        $query->when($artikel["search"] ?? false, function($query, $cari) {
            return $query->where('title', 'like', '%' . $cari . '%');
        } );
        
    }
}
