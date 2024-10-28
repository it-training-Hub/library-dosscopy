<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrintType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'print_types';

    protected $fillable = [
        'name',
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
