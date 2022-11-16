<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class Product.
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/products');
        CRUD::setEntityNameStrings('Product', 'Products');
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
            'label' => 'List Image',
            'name' => 'list_image.image',
            'type' => 'image',
            'crop' => true,
            'aspect_ratio' => 0,
        ]);

        CRUD::addcolumn('title');
        CRUD::addcolumn('price');
        CRUD::addcolumn([
            'name' => 'discount',
            'label' => 'Discount %',
            'type' => 'text',
        ]);
        CRUD::addColumn([
            'name' => 'condition',
            'label' => 'Condition',
            'type' => 'select_from_array',
            'options'       => [
                'default'   => 'Default',
                'new' => 'New',
                'hot'        => 'Hot',
            ]
        ]);
        CRUD::addColumn([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'select_from_array',
            'options'       => [
                1   => 'Published',
                0 => 'Unpublish',
            ]
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
        CRUD::setValidation(ProductRequest::class);

        CRUD::addField([
            'name' => 'condition',
            'label' => 'Condition',
            'type' => 'select_from_array',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'options'       => [
                'default'   => 'Default',
                'new' => 'New',
                'hot'        => 'Hot',
            ],
            'tab' => 'Info',
        ]);
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
            'tab' => 'Info',
        ]);
        CRUD::addField([
            'name' => 'title',
            'tab' => 'Info',
            'wrapper' => [
                'class' => 'form-group col-md-10',
            ],
        ]);
        CRUD::addField([
            'name' => 'price',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'Info',
        ]);
        CRUD::addField([
            'name' => 'discount',
            'label' => 'Discount %',
            'type' => 'text',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'Info',
        ]);
        CRUD::addField([
            'name' => 'sku',
            'wrapper' => [
                'class' => 'form-group col-md-3',
            ],
            'tab' => 'Info',
        ]);
        CRUD::addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'ckeditor',
            'tab' => 'Info',
            'options'       => [
                'autoGrow_minHeight'   => 200,
                'autoGrow_bottomSpace' => 50,
                'removePlugins'        => 'resize,maximize',
            ]
        ]);
        CRUD::addField(
            [ // Select2Multiple = n-n relationship (with pivot table)
                'label' => "Sizes",
                'tab' => 'Storage',
                'type' => 'relationship',
                'name' => 'sizes', // the method that defines the relationship in your Model
                'entity' => 'sizes', // the method that defines the relationship in your Model
                'attribute' => 'size', // foreign key attribute that is shown to user
                'model' => "App\Models\ProductSize", // foreign key model
                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
                'subfields' => [
                    [
                        'name' => 'amount',
                        'type' => 'text',
                        'wrapper' => [
                            'class' => 'form-group col-md-3',
                        ],
                    ],
                ],
                'pivotSelect'=> [
                    'wrapper' => [
                        'class' => 'col-md-9',
                    ],
                ],
            ]
        );
        CRUD::addField([
            'name' => 'body',
            'label' => 'Body',
            'type' => 'ckeditor',
            'tab' => 'Info',
            'options'       => [
                'autoGrow_minHeight'   => 200,
                'autoGrow_bottomSpace' => 50,
                'removePlugins'        => 'resize,maximize',
            ]
        ]);
        // CRUD::addField(
        //     [ // Select2Multiple = n-n relationship (with pivot table)
        //         'tab' => 'Images',
        //         'label' => "Images",
        //         'type' => 'select2_multiple',
        //         'name' => 'images', // the method that defines the relationship in your Model
        //         'entity' => 'images', // the method that defines the relationship in your Model
        //         'attribute' => 'title', // foreign key attribute that is shown to user
        //         'model' => "App\Models\ProductImage", // foreign key model
        //         'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        //     ]
        // );
        CRUD::addField(
            [ // Select2Multiple = n-n relationship (with pivot table)
                'tab' => 'Images',
                'label'     => 'Images',
                'type'      => 'checklist',
                'name'      => 'images',
                // 'entity'    => 'images',
                'attribute' => 'images',
                'model'     => "App\Models\ProductImage",
                'pivot'     => true,
            ]
        );
        CRUD::addField(
            [  // Select
                'tab' => 'Images',
                'label'     => "List Image",
                'type'      => 'select2',
                'name'      => 'list_image_id', // the db column for the foreign key

                // optional
                // 'entity' should point to the method that defines the relationship in your Model
                // defining entity will make Backpack guess 'model' and 'attribute'
                'entity'    => 'list_image',

                // optional - manually specify the related model and attribute
                'model'     => "App\Models\ProductImage", // related model
                'attribute' => 'title', // foreign key attribute that is shown to user
            ]
        );
        // CRUD::addField(
        //     [
        //         'label' => "Product Images",
        //         'name' => "images_old",
        //         'type' => 'repeatable',
        //         'tab' => 'Images',
        //         'subfields' => [
        //             [
        //                 'name'    => 'title',
        //                 'type'    => 'text',
        //                 'label'   => 'Image Title',
        //                 'wrapper' => ['class' => 'form-group col-md-4'],
        //             ],
        //             [
        //                 'name'    => 'image',
        //                 'type'    => 'image',
        //                 'label'   => 'Image',
        //                 'crop' => true,
        //                 'aspect_ratio' => 0,
        //                 'wrapper' => ['class' => 'form-group col-md-4'],
        //             ],
        //             [   // Checkbox
        //                 'name'  => 'main',
        //                 'label' => 'Main Image',
        //                 'type'  => 'checkbox'
        //             ],
        //         ],
        //         'reorder' => true,
        //         'min_rows' => 1,
        //         'max_rows' => 3,
        //     ],
        // );

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
}
