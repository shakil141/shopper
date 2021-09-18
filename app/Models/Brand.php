<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $fillable = [
        'brand_name',
        'contact_person',
        'contact_no',
        'address',
        'status',
    ];

    public function getStatusAttribute($value){
        if($value == ApplicationConstant::ACTIVE){
            return "Active";
        }
        return "InActive";
    }
}
