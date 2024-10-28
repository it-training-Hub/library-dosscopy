<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FieldType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'field_types';

    protected $fillable = [
        'name',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // Optionnel : définir les relations si nécessaire
    public function printAttributes()
    {
        return $this->hasMany(PrintAttribute::class);
    }
}
