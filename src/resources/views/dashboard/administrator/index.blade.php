@extends('dashboard.administrator.master')

@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

            @include('dashboard.blocks.stats.widgets')

            @include('dashboard.blocks.stats.site-visits')

            @include('dashboard.blocks.stats.monthly')

            @include('dashboard.blocks.stats.todo')

            @include('dashboard.blocks.stats.sales-report')

            @include('dashboard.blocks.stats.weather')

            @include('dashboard.blocks.stats.chat')
    </div>
@endsection
