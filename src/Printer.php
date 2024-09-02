<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;

    protected $table = 'printers'; // Spécifiez le nom de la table si ce n'est pas le nom par défaut

    // Définir les champs qui peuvent être massivement assignés
    protected $fillable = [
        'cyber_id',
        'name',
        'status',
        'oid_status',
        'ip_address',
    ];

    // Définir les relations
    public function cyber()
    {
        return $this->belongsTo(Cyber::class, 'cyber_id');
    }
}
