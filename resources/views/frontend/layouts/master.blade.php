<!DOCTYPE html>
<html lang="en">
	
<head>
    @include('frontend.layouts._partial.meta')
    @include('frontend.layouts._partial.css')

</head>

<body>
    @include('frontend.layouts._partial.header')
    
  
 	<section>
 		@yield('content')
 	</section>

    

	@include('frontend.layouts._partial.footer')
	@include('frontend.layouts._partial.script')
</body>

</html>