<!doctype html>
<html>
<head>
	@include('includes.head')    
</head>
<body>

 <div class="header-all">
 
 
  @include('includes.header')
  
  </div>
  
  <div class="header-all">
 
 
  @include('includes.service_label')
  
  </div>
  

  
 
  
    <div class="container">
    
     @yield('content')
  
  </div>
  
  
  <footer >
		@include('includes.footer')
	</footer>
</body>
</html>
