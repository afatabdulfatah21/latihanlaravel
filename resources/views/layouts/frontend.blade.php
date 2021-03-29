<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- FontAwesome JS-->
	<link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{ asset('devblog/css/theme-1.css') }}">

</head> 

<body>
    
<x-header/>
    
    <div class="main-wrapper">
	@yield('content')    
	    
<x-footer/>
    </div>    
       
    <!-- Javascript -->          
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('devblog/plugins/popper.min.js') }}"></script> 
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   

</body>
</html> 

