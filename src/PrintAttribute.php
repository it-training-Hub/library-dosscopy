<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrintAttribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'print_attributes';

    protected $fillable = [
        'print_type_id',
        'field_type_id',
        'name',
        'placeholder',
        'details',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Optionnel : définissez les relations si nécessaire
    public function printType()
    {
        return $this->belongsTo(printType::class);
    }

    public function fieldType()
    {
        return $this->belongsTo(FieldType::class);
    }
}
