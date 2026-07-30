<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MembershipApplication extends Model
{
    use HasUuids;

    protected $table = 'membership_applications';

    protected $primaryKey = 'id_application';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'npm',
        'birth_date',
        'bio_url',
        'bio_public_id',
        'cv_url',
        'cv_public_id',
        'password',
        'status',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
