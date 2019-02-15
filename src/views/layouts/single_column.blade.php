@include('zadmin::partials.head')

<div class="bg-white">
    <div class="container">
        @include('zadmin::partials.header')
    </div>
</div>

<div class="container w-2/3 flex justify-center py-6 flex-col">
    <div class="header pb-6 text-xl">
        Dashboard
    </div>
    <div class="container bg-white h-80 w-full">
        @yield('content')
    </div>
</div>
@include('zadmin::partials.footer')