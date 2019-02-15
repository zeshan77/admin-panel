@include('zadmin::partials.head')

<div class="bg-white">
    <div class="container">
        @include('zadmin::partials.header')
    </div>
</div>

<div class="container w-full h-screen h-screen">
    @yield('content')
</div>
@include('zadmin::partials.footer')