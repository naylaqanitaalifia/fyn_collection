<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'outfit_id',
        'title',
        'image_path',
    ];

    public function outfitInspiration()
    {
        return $this->belongsTo(OutfitInspiration::class);
    }
}
