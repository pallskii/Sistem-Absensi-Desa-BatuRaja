<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qrcodes extends Model
{
    protected $table = 'qrcodes';
    protected $primaryKey = 'id';
    protected $fillable = ['code', 'valid_date'];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }
}
