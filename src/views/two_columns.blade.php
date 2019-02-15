@extends('zadmin::layouts.two_columns')

@section('content')
    <div class="h-full">
        <div class="flex h-full">
            <div class="sidebar bg-white rounded w-1/5 p-6">
                <div class="text-xl">This is sidebar</div>
            </div>
            <div class="content w-4/5 ml-10 h-full">
                <h1 class="my-6 text-xl">Container</h1>
                <div class="container bg-white p-6 h-80 flex items-center justify-center rounded">
                    <div class="text-xl">Container</div>
                </div>
            </div>
        </div>
    </div>
@endsection
