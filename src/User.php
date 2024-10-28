<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'role_id',
        'plan_id',
        'provider_id',
        'name',
        'email',
        'password',
        'img',
        'last_name',
        'first_name',
        'phone',
        'verified',
        'api_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Relations
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
