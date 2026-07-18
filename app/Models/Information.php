<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Information extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'informations';
    protected $primaryKey = 'id_information';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_post',
        'description',
        'file',
        'bidang',
        'status',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'id_post', 'id_post');
    }
}
