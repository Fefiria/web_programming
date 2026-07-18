<?php

namespace App\Models;

use App\Models\Division;
use App\Models\Information;
use App\Models\ListPresensi;
use App\Models\Presensi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'id_post';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_user',
        'id_role',
        'id_division',
        'npm',
        'first_name',
        'last_name',
        'profile_image',
        'birth_date',
        'cv',
        'description',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'id_division', 'id_division');
    }

    public function informations(): HasMany
    {
        return $this->hasMany(Information::class, 'id_post', 'id_post');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'id_post', 'id_post');
    }

    public function presensis(): HasMany
    {
        return $this->hasMany(Presensi::class, 'id_post', 'id_post');
    }

    public function listPresensis(): HasMany
    {
        return $this->hasMany(ListPresensi::class, 'id_post', 'id_post');
    }
}
