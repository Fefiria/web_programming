<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasUuids;

    protected $primaryKey = 'id_gallery_image';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_gallery',
        'image_url',
        'image_public_id',
    ];

    public function gallery()
    {
        return $this->belongsTo(
            Gallery::class,
            'id_gallery',
            'id_gallery'
        );
    }
}
