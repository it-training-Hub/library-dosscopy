<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cyber extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cybers';

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'address',
        'opening_hours',
        'img',
        'is_open',
        'printers',
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'is_open' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Définir la relation avec les imprimantes
    public function printers()
    {
        return $this->hasMany(Printer::class, 'cyber_id');
    }
    
    public function printRequests()
    {
        return $this->hasMany(PrintRequest::class);
    }

    public function printHistories()
    {
        return $this->hasMany(PrintHistory::class);
    }
}
