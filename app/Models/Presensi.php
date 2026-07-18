<?php

namespace App\Models;

use App\Models\ListPresensi;
use App\Models\Post;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Presensi extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'presensis';
    protected $primaryKey = 'id_presensi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_post',
        'title',
        'description',
        'role',
        'open_at',
        'close_at',
        'status',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id_post', 'id_post');
    }

    public function listPresensis(): HasMany
    {
        return $this->hasMany(ListPresensi::class, 'id_presensi', 'id_presensi');
    }
}
