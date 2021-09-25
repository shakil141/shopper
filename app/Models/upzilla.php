<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
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

    public function district(){
        return $this->belongsTo(district::class);
    }

    public function getStatusAttribute($value){
        if($value == ApplicationConstant::Active){
            return "Active";
        }
        return "InActive";
    }

}
