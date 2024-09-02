<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'print_request_id',
        'user_id',
        'cyber_id',
        'printer_id',
        'document_url',
        'status',
        'printed_at',
        'duration',
        'pages_printed',
        'cost',
    ];

    /**
     * Get the print request associated with the print history.
     */
    public function printRequest()
    {
        return $this->belongsTo(PrintRequest::class);
    }

    /**
     * Get the user who made the print request.
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
}
