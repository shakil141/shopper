<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'role_users';

    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'phone_number',
        'user_email',
        'password',
        'confirm_password',
        'status',
        'image'
    ];

    protected $perPage = 10;

    public function getStatusAttribute($value)
    {
        if($value == ApplicationConstant::ACTIVE)
        {
            return 'Active';
        }
        return 'In Active';



    }

    public function setStoreAttribute($value)
    {
        $this->attributes['store'] = json_encode($value);
    }

    public function getStoreAttribute($value)
    {
        return collect(json_decode($value))->implode(',');
    }
}
