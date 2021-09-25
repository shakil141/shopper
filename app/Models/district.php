<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
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
     public function upzilla(){
        return $this->hasMany(upzilla::class);
    }
    public function getStatusAttribute($value){
        if($value == ApplicationConstant::Active){
            return "Active";
        }
        return "InActive";
    }
}
