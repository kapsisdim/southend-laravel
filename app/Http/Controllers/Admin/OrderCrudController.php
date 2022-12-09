<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class Order.
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/orders');
        CRUD::setEntityNameStrings('Orders', 'Orders');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('order_number');
        CRUD::column('comment');
        CRUD::column('coupon');
        CRUD::column('payment_method');
        CRUD::addColumn([
            'name' => 'payment_status',
            'label' => 'Payment Status',
            'type' => 'select_from_array',
            'options'       => [
                1   => 'Payed',
                0 => 'Pending',
            ]
        ]);
        CRUD::addColumn([
            'name' => 'order_status',
            'label' => 'Order Status',
            'type' => 'select_from_array',
            'options'       => [
                'pending'   => 'Pending',
                'failed' => 'Failed',
                'completed' => 'Completed',
            ]
        ]);
        CRUD::addColumn([
            'name' => 'total',
            'label' => 'Total €',
            'type' => 'text',
        ]);

        /*
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupShowOperation()
    {
        CRUD::column('order_number');
        CRUD::addColumn([
            'name' => 'comment',
            'label' => 'Comment',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getUser.name',
            'label' => 'Customer Name',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getUser.email',
            'label' => 'Customer Email',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getUser.phone',
            'label' => 'Customer Phone Number',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getShippingAddress.region',
            'label' => 'Shipping Region',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getShippingAddress.city',
            'label' => 'Shipping City',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getShippingAddress.address',
            'label' => 'Shipping Address',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getShippingAddress.post_code',
            'label' => 'Shipping Post Code',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'created_at',
            'label' => 'Order Date',
            'type' => 'text',
        ]);
        CRUD::addColumn([
            'name' => 'getCoupon.code',
            'label' => 'Coupon',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getCoupon.discount',
            'label' => 'Coupon Discount',
            'type' => 'text',
            'tab' => 'Shipping Info',
        ]);
        CRUD::addColumn([
            'name' => 'getCoupon.discount_type',
            'label' => 'Coupon Discount Type',
            'type' => 'select_from_array',
            'options'       => [
                'fixed'   => 'Fixed',
                'percentage' => '%',
            ],
            'tab' => 'Shipping Info',
        ]);
        CRUD::column('payment_method');
        CRUD::addColumn([
            'name' => 'payment_status',
            'label' => 'Payment Status',
            'type' => 'select_from_array',
            'options'       => [
                1   => 'Payed',
                0 => 'Pending',
            ],
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                    if ($entry->payment_status) {
                        return 'badge badge-success';
                    } else {
                        return 'badge badge-warning';
                    }
                },
            ],
        ]);
        CRUD::addColumn([
            'name' => 'order_status',
            'label' => 'Order Status',
            'type' => 'select_from_array',
            'options'       => [
                'pending'   => 'Pending',
                'failed' => 'Failed',
                'completed' => 'Completed',
            ],
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                    if ($entry->order_status == 'completed') {
                        return 'badge badge-success';
                    } elseif ($entry->order_status == 'failed') {
                        return 'badge badge-danger';
                    } else {
                        return 'badge badge-warning';
                    }
                },
            ],
        ]);
        CRUD::addColumn([
            'name' => 'getShipping.cost',
            'label' => 'Shipping Fee €',
            'type' => 'text',
        ]);
        CRUD::addColumn([
            'name' => 'total',
            'label' => 'Total €',
            'type' => 'text',
            'wrapper' => [
                'element' => 'span',
                'class' => 'badge badge-default',
            ],
        ]);
    }
}
