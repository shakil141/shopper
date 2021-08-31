<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\ApplicationConstant;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'type',
        'menu',
        'category',
        'created_by',
        'updated_by'
    ];

    public function getStatusAttribute($value){
        if($value == ApplicationConstant::ACTIVE){
            return 'Active';
        }
        return 'In Active';
    }
}
