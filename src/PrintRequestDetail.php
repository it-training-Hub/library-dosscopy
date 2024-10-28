<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrintRequestDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'print_request_details'; // Remplacez par le nom correct de votre table

    protected $fillable = [
        'print_request_id',
        'print_attribute_id',
        'value',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function printRequest()
    {
        return $this->belongsTo(PrintRequest::class);
    }

    public function printAttribute()
    {
        return $this->belongsTo(PrintAttribute::class);
    }
}
