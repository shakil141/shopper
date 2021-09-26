<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
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
    public function getStatusAttribute($value){
        if($value == ApplicationConstant::Active){
            return "Active";
        }
        return "InActive";
    }
}
