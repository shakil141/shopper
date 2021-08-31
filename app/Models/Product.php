<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $primaryKey = "id";

    protected $guarded = ['id','created_at','updated_at'];


    protected $perPage = 10;

    public function getStatusAttribute($value)
    {
        if($value == ApplicationConstant::ACTIVE)
        {
            return 'Active';
        }
        return 'In Active';



    }
}
