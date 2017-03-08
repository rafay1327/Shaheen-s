<!Doctype html>
<html lang="en">
<head>
@include('partials._head')

@yield('stylesheets')
</head>



<body>
	@include('partials._nav')

<div class ="container"> 
   	@include('partials._messages')
		{{ Auth::check() ? "Logged In":"Logged Out"}}		

		@yield('content')

@include('partials._footer')
 
</div> <!-- End of Container-->
 
		@include('partials._javascripts')
		@yield('scripts')

  </body>
</html>