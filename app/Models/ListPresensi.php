<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListPresensi extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'list_presensis';
    protected $primaryKey = 'id_list_presensi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_post',
        'id_presensi',
        'id_status_presensi',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id_post', 'id_post');
    }

    public function presensi(): BelongsTo
    {
        return $this->belongsTo(Presensi::class, 'id_presensi', 'id_presensi');
    }

    public function statusPresensi(): BelongsTo
    {
        return $this->belongsTo(StatusPresensi::class, 'id_status_presensi', 'id_status_presensi');
    }
}
