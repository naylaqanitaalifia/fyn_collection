<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'service_name',
        'price',
        'desc',
        'duration',
        'service_thumbnail',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
