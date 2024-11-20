<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = 'kehadirans';
    protected $id = 'id';
    protected $fillable = ['user_id', 'qrcode_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qrcode()
    {
        return $this->belongsTo(Qrcodes::class);
    }
}
