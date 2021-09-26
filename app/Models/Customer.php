<?php

namespace App\Models;
use App\Constants\ApplicationConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_alt_phone',
        'customer_email',
        'division_name',
        'district_name',
        'upazilla_name',
        'home_address',
        'status',
    ];
    public function getStatusAttribute($value){
        if($value == ApplicationConstant::Active){
            return "Active";
        }
        return "InActive";
    }
}
