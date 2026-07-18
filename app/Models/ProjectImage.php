<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectImage extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'project_images';
    protected $primaryKey = 'id_project_image';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_project',
        'slot',
        'image_url',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }
}
