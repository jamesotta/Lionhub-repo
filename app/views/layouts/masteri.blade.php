<!doctype html>
<html>
<head>
	@include('includes.head')    
</head>
<body>

<div id="header">
 <div class="header-all">
 
 
  @include('includes.header')
  </div>
  </div>
  
    
 
  <div class="container" >
  
    @include('includes.navbar')
  
  </div>
  
  
  
    <div class="container">
    
     @yield('content')
  
  </div>
  
  
  <footer >
		@include('includes.footer')
	</footer>
</body>
</html>
