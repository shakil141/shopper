<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    use HasFactory;

    protected $table = 'user_accesses';

    protected $primaryKey = 'id';

    protected $incremating = true;

    protected $fillable = [
        'user_email',
        'role_name'
    ];
}
