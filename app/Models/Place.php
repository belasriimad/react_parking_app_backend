<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'availlable', 'user_id', 'sector_id',
                          'start_time', 'end_time', 'total_price'];

    
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
