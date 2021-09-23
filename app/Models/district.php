<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;
    protected $fillable = [
        'district_name',
        'division_id',
        'status',
    ];

    public function division(){
        return $this->belongsTo(division::class);
    }
     public function upazilla(){
        return $this->hasMany(upazilla::class);
    }
}
