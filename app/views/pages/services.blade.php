@extends('layouts.service')
@section('title', 'Our Service')
@section('content')

<div class="container shadow"  style="background-color:#FFF;">

				<div class="row" >

<div class="navbar navbar-default" role="navigation" style="margin-bottom:0"> 
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
              <li >{{ HTML::link('', 'Home') }}</li>
              <li><a href="#">About Us</a></li>
              <li  class="active">{{ HTML::link('/pages/services', 'Service') }}</li>
			                <li><a href="#">Blog</a></li>
              <li>{{ HTML::link('/pages/contact_us', 'Contact Us') }}</li>
              <li >{{ HTML::link('/pages/our_team', 'Our team') }}</li>

              
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

<div class="container shadow" style="background-color:#FFF;">
			
			

	        	<div class="row service-wrapper-row">
        			<div class="col-sm-4">
        				<div class="service-image">
						
						 {{ HTML::image("img/services1.jpg", 'software ', array('style' => 'width:100%')) }}

        				</div>
        			</div>
        			<div class="col-sm-8">
    					<h3>Computer Programming</h3>
    					<p>
we have good mentors and tutors who can teach u programming ..cheers!!!..Opata will compose a nice one here 				</p>
    				</div>
				</div>
				<div class="row service-wrapper-row">
        			<div class="col-sm-4">
        				<div class="service-image">
						 {{ HTML::image("img/services2.jpg", 'software ', array('style' => 'width:100%')) }}
        				</div>
        			</div>
        			<div class="col-sm-8">
    					<h3>Hardware</h3>
    					<p>
we have good mentors and tutors who can teach u programming ..cheers!!!..Opata will compose a nice one here    					</p>
    					</p>
    				</div>
				</div>
				
	        </div>
	   
		
		@stop