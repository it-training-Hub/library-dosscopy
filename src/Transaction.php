<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transactions'; // Nom de la table associée

    protected $fillable = [
        'user_id',
        'print_request_id',
        'amount',
        'status_id',
        'paid_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2', // Cast le montant en décimal avec 2 décimales
        'paid_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function printRequest()
    {
        return $this->belongsTo(PrintRequest::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
