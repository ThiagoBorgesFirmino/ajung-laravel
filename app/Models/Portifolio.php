<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortifolioImage;

class Portifolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(PortifolioImage::class);
    }

    // public function images(){
    //     return $this->belongsTo(PortifolioImage::class);
    // }
}
