<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $guarded = ['id'];

    protected $fillable = [
        'address',
        'city',
        'phone',
        'email',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

}
