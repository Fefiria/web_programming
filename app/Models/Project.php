<?php

namespace App\Models;

use App\Models\Division;
use App\Models\Post;
use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'projects';
    protected $primaryKey = 'id_project';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_post',
        'id_division',
        'title',
        'description',
        'url_project',
        'status',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id_post', 'id_post');
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'id_division', 'id_division');
    }

    public function projectImages(): HasMany
    {
        return $this->hasMany(ProjectImage::class, 'id_project', 'id_project');
    }
}
