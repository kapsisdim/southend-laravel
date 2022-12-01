<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
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
        'order_number',
        'comment',
        'coupon',
        'payment_method',
        'payment_status',
        'order_status',
        'total',
        'user_id',
        'shipping_id',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getShipping()
    {
        return $this->belongsTo(Shipping::class, 'shipping_id', 'id');
    }

    public function getBillingAddress()
    {
        return $this->belongsTo(BillingAddress::class, 'billing_address_id', 'id');
    }

    public function getShippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class, 'shipping_address_id', 'id');
    }

    public function getCoupon()
    {
        return $this->belongsTo(Coupon::class, 'coupon', 'code');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function getProducts()
    {
        return $this->belongsToMany(Product::class, 'order_products');
    }
}
