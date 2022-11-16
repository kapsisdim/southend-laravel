<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Sluggable;

    /*
    |--------------------------------------------------------------------------
    | VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'sku',
        'price',
        'description',
        'body',
        'slug',
        'status',
        'condition',
        'discount',
        'list_image_id',
        'category_id',
        'collection_id',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function sizes()
    {
        return $this->belongsToMany(ProductSize::class, 'products_product_sizes')
            ->withPivot('amount')->orderByRaw("FIELD(size, \"xs\", \"s\", \"m\", \"l\", \"xl\", \"xxl\", \"one_size\")");
    }

    public function getImages()
    {
        return $this->belongsToMany(ProductImage::class, 'product_images_products');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function list_image()
    {
        return $this->belongsTo(ProductImage::class, 'list_image_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id', 'id');
    }
}
