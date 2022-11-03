<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'title',
        'images',
        'sku',
        'price',
        'description',
        'body',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'images' => 'json',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function sizes()
    {
        return $this->belongsToMany(ProductSize::class, 'products_product_sizes')
            ->withPivot('amount')->orderByRaw("FIELD(size, \"xs\", \"s\", \"m\", \"l\", \"xl\", \"xxl\", \"one_size\")");
    }
}
