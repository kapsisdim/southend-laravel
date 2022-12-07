<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'contact_pages';

    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
