<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CollectionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class Collection.
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CollectionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Collection::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/collections');
        CRUD::setEntityNameStrings('Collection', 'Collections');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addcolumn([
            'label' => 'Image',
            'name' => 'getImage.image',
            'type' => 'image',
            'crop' => true,
            'aspect_ratio' => 0,
        ]);
        CRUD::column('title');
        CRUD::addColumn([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'options'       => [
                1   => '<span class="badge badge-success">Published</span>',
                0 => '<span class="badge badge-error">Unpublished</span>',
            ],
            'escaped' => false
        ]);

        /*
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CollectionRequest::class);

        CRUD::field('title');
        CRUD::addField(
            [  // Select
                'label'     => "Collection Image",
                'type'      => 'select2',
                'name'      => 'image_id', // the db column for the foreign key

                // optional
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'getImage',

                // optional - manually specify the related model and attribute
                'model'     => "App\Models\ProductImage", // related model
                'attribute' => 'title', // foreign key attribute that is shown to user
            ]
        );
        CRUD::addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'options'       => [
                1   => 'Published',
                0 => 'Unublished',
            ],
        ]);

        /*
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements
        CRUD::set('reorder.label', 'title');
        // define how deep the admin is allowed to nest the items
        // for infinite levels, set it to 0
        // CRUD::set('reorder.max_level', 2);
    }
}
