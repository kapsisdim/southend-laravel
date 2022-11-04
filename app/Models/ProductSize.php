<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $guarded = ['id'];

    protected $fillable = [
        'size',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
