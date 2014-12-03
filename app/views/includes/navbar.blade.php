	    	<div class="container shadow navbar-b"  id="nav">

				<div class="row" >

<div class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active">{{ HTML::link('', 'Home') }}</li>
              <li>{{ HTML::link('/pages/about_us', 'About Us') }}</li>
              <li>{{ HTML::link('', 'Eligibilty') }}</li>
			                <li><a href="#">Blog</a></li>
              <li>{{ HTML::link('/pages/contact_us', 'Contact Us') }}</li>
              <li>{{ HTML::link('/pages/our_team', 'Our team') }}</li>

              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
			  {{ HTML::link('/user/registration', 'Register') }}
			  
			 </li>
              <li>
			    {{ HTML::link('/user/login', 'Login') }}
			  
			  </li>
			  <li><a href="#">Site map</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	  </div></div>