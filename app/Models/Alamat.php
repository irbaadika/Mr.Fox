<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamats';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
