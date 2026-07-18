<?php

namespace App\Models;

use App\Models\ListPresensi;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusPresensi extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'status_presensis';
    protected $primaryKey = 'id_status_presensi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
    ];

    public function listPresensis(): HasMany
    {
        return $this->hasMany(ListPresensi::class, 'id_status_presensi', 'id_status_presensi');
    }
}
