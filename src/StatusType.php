<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusType extends Model
{
    use HasFactory;

    protected $table = 'status_type';

    protected $fillable = ['name'];

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
