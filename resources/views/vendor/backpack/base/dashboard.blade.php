@extends(backpack_view('blank'))

@php
    if (config('backpack.base.show_getting_started')) {
        $widgets['before_content'][] = [
            'type'        => 'view',
            'view'        => 'backpack::inc.getting_started',
        ];
    } else {
        $widgets['before_content'][0] = [
            'type'    => 'div',
            'class'   => 'row',
            'content' => [ // widgets
                [
                    'type'     => 'view',
                    'view'     => 'vendor.backpack.crud.custom.card',
                    'wrapper' => [
                        'class' => 'col-sm-6 col-md-2', // customize the class on the parent element (wrapper)
                        'style' => 'border-radius: 10px;',
                    ],
                ],
                [
                    'type'       => 'card',
                    'wrapper' => ['class' => 'col-sm-6 col-md-2'], // optional
                    'class'   => 'card bg-primary text-white', // optional
                    'content'    => [
                        'header' => '# Active Products', // optional
                        'body'   => \App\Models\Product::where('status', 1)->count(),
                        // 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                    ]
                ],
                [
                    'type'       => 'card',
                    'wrapper' => ['class' => 'col-sm-6 col-md-2'], // optional
                    'class'   => 'card bg-success text-white', // optional
                    'content'    => [
                        'header' => '# Categories', // optional
                        'body'   => \App\Models\Category::count(),
                        // 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                    ]
                ],
            ]
        ];
        $widgets['before_content'][1] = [
            'type'    => 'div',
            'class'   => 'row',
            'content' => [ // widgets
                [
                    'type' => 'chart',
                    'controller' => \App\Http\Controllers\Admin\Charts\IncomeChartController::class,
                    'content' => [
                        'header' => 'Income',
                    ],
                    'wrapper' => [
                        'class' => 'col-sm-12 col-md-8', // customize the class on the parent element (wrapper)
                        'style' => 'border-radius: 10px;',
                    ],
                ],
                [
                    'type' => 'chart',
                    'controller' => \App\Http\Controllers\Admin\Charts\OrdersPieChartController::class,
                    'content' => [
                        'header' => 'Orders',
                    ],
                    'wrapper' => [
                        'class' => 'col-sm-6 col-md-4', // customize the class on the parent element (wrapper)
                        'style' => 'border-radius: 10px;',
                    ],
                ],
            ]
        ];
    }
@endphp

@section('content')
@endsection
