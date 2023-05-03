<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.header')
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    	@include('includes.loader')
    	@include('includes.topmenu')
    	@yield('content')
    	@include('includes.footer')
    	@include('includes.script')
	</body>
   
</html>
