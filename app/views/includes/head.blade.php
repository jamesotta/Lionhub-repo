<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!--[if lt IE 9]>
<script src="js/libs/html5shiv.js"></script>
<script src="js/libs/respond.min.js"></script>
<![endif]-->
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield ('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
       <link rel="icon" href="../favicon.png" type="image/x-icon">

        
           {{ HTML::style('css/bootstrap.min.css') }}
			    {{ HTML::style('css/main.css') }}
                   {{ HTML::style('css/video-js.css') }}
                    {{ HTML::style('css/style.css') }}
                     {{ HTML::style('css/normalize.css') }}
                      {{ HTML::style('css/font-awesome.css') }}
                      {{ HTML::style('css/responsive-accordion.css') }}
                      {{ HTML::style('css/datepicker.css') }}
                      {{ HTML::style('css/animate.min.css') }}
                          
				 {{ HTML::script('js/modernizr-2.6.2-respond-1.1.0.min.js') }}

				    {{HTML::script('js/jquery-1.9.1.min.js') }}
                   {{ HTML::script('js/bootstrap.min.js') }}
				   {{ HTML::script('js/jquery.fitvids.js') }}
				   {{ HTML::script('js/main-menu.js') }}
                   {{ HTML::script('../../../funky-tunes-css/js/general.js') }}
                   {{ HTML::script('../../../funky-tunes-css/js/video.js') }}

				   {{ HTML::script('js/lionhub.js') }}
                   
                     {{ HTML::script('js/jquery.sequence-min.js') }}

				   {{ HTML::script('js/jquery.bxslider.js') }}
                   {{ HTML::script('js/bootstrap-datepicker.js') }}
                   {{ HTML::script('js/video.js') }}
                   {{ HTML::script('js/responsive-accordion.min.js') }}
                  {{ HTML::script('js/jquery.easing.min.js') }}
                  {{ HTML::script('js/jquery.stickyNavbar.min.js') }}
                   
                   
                   
                    <script type="text/javascript">
 $(function() {
            $(".datepicker").datepicker(
			 
			 {
				 format: 'yyyy/mm/dd/',
				 startDate: '-3d'
				 }
			 );
           
        });
		
		
		// handles check box selection
		$(document).ready(function(e) {
            // handles checkbox for profile checkbox
	$("#profile_others").click(function(e) {
        
		if($(this).is(":checked"))
		{
			$("#others-text").show();
		}
		
		else 
		{
			$("#others-text").val("");
			$("#others-text").hide();
		}
    });
      
	    // handles checkbox for product developing checkbox
	$("#productdevelop_others").click(function(e) {
        
		if($(this).is(":checked"))
		{
			$("#product-others-text").show();
		}
		
		else 
		{
			$("#product-others-text").val("");
			$("#product-others-text").hide();
		}
    });
	
	      // handles checkbox for web profficient checkbox
	$("#webprofficient_others").click(function(e) {
        
		if($(this).is(":checked"))
		{
			$("#webprofficient_others_text").show();
		}
		
		else 
		{
			$("#webprofficient_others_text").val("");
			$("#webprofficient_others_text").hide();
		}
    });
	
	
	 
	      // handles checkbox for mobile profficient checkbox
	$("#mobileprofficient_other").click(function(e) {
      
		if($(this).is(":checked"))
		{
			$("#mobileprofficient_text").show();
		}
		
		else 
		{
			$("#mobileprofficient_text").val("");
			$("#mobileprofficient_text").hide();
		}
    });
	
videojs.options.flash.swf = "js/video-js.swf";
  });
		
		
		
 $(function () {
    $('#nav').stickyNavbar();
});

                    </script>


  
                   
                  


@yield('head')



        