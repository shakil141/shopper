<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upzilla extends Model
{
    use HasFactory;
    protected $fillable = [
        'upzilla_name',
        'district_id',
        'status',
    ];

    public function division(){
        return $this->belongsTo(district::class);
    }

}
