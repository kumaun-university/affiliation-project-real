<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
    @include('partials._nav')
    <div class="container">
        @include('partials._messages')
	    @yield('content')        
    </div>
    @include('partials._footer')
    @include('partials._script')
    @yield('scripts')
</body>
</html>                                		