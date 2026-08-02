<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasUuids;
    protected $primaryKey = 'id_gallery';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'description',
        'event_date',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(
            GalleryImage::class,
            'id_gallery',
            'id_gallery'
        );
    }
}
