<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cyber extends Model
{
    use HasFactory;

    protected $table = 'cybers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'address',
        'printers',
        'img',
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
