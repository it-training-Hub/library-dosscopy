<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    
    protected $fillable = ['name' , 'status_type_id'];

    public function statusType()
    {
        return $this->belongsTo(StatusType::class);
    }
}
