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
        CRUD::column('order_status');
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
}
