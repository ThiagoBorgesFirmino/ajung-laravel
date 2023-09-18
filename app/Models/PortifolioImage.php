<?php

namespace App\Models;

use App\Models\PortifolioImage as ModelsPortifolioImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortifolioImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'portifolio_images';
    public $timestamp = false;

    public function portifolio()
    {
        return $this->belongsTo(Portifolio::class);
    }
}
