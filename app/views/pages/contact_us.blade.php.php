@extends('layouts.contact')
@section('title', 'Contact Us')
@section('content')

	        <div class="container shadow" style="background-color:#FFF;" >
			
	        	
				<div class="row">
	        		<div class="col-sm-7">
	        			<!-- Map -->
	        			<div id="contact-us-map">

	        			</div>
	        			<!-- End Map -->
	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<b>Address:</b> 123 Library Street, Nigeria, Uiversity Of Nigeria <br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:">lionhub@gmail.com</a>
	        			</p>
	        			<!-- End Contact Info -->
	        		</div>
	        		<div class="col-sm-5">
	        			<!-- Contact Form -->
	        			<h3>Send Us a Message</h3>
	        			<div class="contact-form-wrapper">
		        			<form class="form-horizontal" role="form">
		        				 <div class="form-group">
		        				 	<label for="Name" class="col-sm-3 control-label"><b>Your name</b></label>
		        				 	<div class="col-sm-9">
										<input class="form-control" id="Name" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>
									<div class="col-sm-9">
										<input class="form-control" id="contact-email" type="text" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Select Topic</b></label>
									<div class="col-sm-9">
										<select class="form-control" id="prependedInput">
											<option>Please select topic...</option>
											<option>General</option>
											<option>Services</option>
											<option>Orders</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>
									<div class="col-sm-9">
										<textarea class="form-control" rows="5" id="contact-message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn pull-right">Send</button>
									</div>
								</div>
		        			</form>
		        		</div>
		        		<!-- End Contact Info -->
	        		</div>
	        	</div>
				
	        </div>
	   
		
		@stop