<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrintRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'print_requests'; // Remplacez par le nom correct de votre table

    protected $fillable = [
        'user_id',
        'cyber_id',
        'printer_id',
        'document_id',
        'status_id',
        'requested_at',
        'printed_at',
    ];

    protected $casts = [
        'requested_at' => 'datetime',
        'printed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cyber()
    {
        return $this->belongsTo(Cyber::class);
    }

    public function printer()
    {
        return $this->belongsTo(Printer::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function printRequestDetails()
    {
        return $this->hasMany(PrintRequestDetail::class);
    }
}
