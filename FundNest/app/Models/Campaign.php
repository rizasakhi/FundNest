<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'description', 'start_date', 'end_date', 'banner_image'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
