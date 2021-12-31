@extends(backpack_view('blank'))

@php
    use Backpack\CRUD\app\Library;
    Widget::add( [
    'type'       => 'chart',
    'controller' => \App\Http\Controllers\Admin\Charts\ContactChartController::class,

    // OPTIONALS

     'class'   => 'card mb-2',
     'wrapper' => ['class'=> 'col-md-6'] ,
     'content' => [
     'header' => 'Phản hồi của khách hàng',
     'body'   => 'Phân loại phản  hồi <br>',
    ],
    ]);
@endphp

@section('content')
@endsection
