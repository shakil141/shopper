<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\ApplicationConstant;
class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_name',
        'store_address',
        'contact_person',
        'contact_no',
        'weekend',
        'open_hour',
        'close_hour',
        'status',
    ];
    public function getStatusAttribute($value){
        if($value == ApplicationConstant::Active){
            return "Active";
        }
        return "InActive";
    }
}
