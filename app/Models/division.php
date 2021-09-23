<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;
    protected $fillable = [
        'division_name',
        'status',
    ];

    public function district(){
        return $this->hasMany(district::class);
    }
}
