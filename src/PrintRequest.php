<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cyber_id',
        'printer_id',
        'document_url',
        'status',
        'requested_at',
        'printed_at',
    ];

    /**
     * Get the user that made the print request.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the cyber where the print request was made.
     */
    public function cyber()
    {
        return $this->belongsTo(Cyber::class);
    }

    /**
     * Get the printer used for the print request.
     */
    public function printer()
    {
        return $this->belongsTo(Printer::class);
    }

    /**
     * Get the print history associated with the print request.
     */
    public function printHistories()
    {
        return $this->hasMany(PrintHistory::class);
    }
}
