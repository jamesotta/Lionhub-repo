@extends('layouts.login')
@section('title', '	User >> Login')
@section('content')


<div class="container shadow" style="background-color:#FBFBFB;">

<div class="col-md-12">


<ul class="breadcrumb" >
<li><a class="active" href="{{url('/')}}">Home</a> <span class="divider">&rarr;</span></li>
<li>Log in</li>
</ul>


              @if(Session::has('account_notactivated'))
                <div class="alert alert-danger">
                {{ Session::get('account_notactivated')}}
                
                </div>
                
                 @endif
                 
                @if(Session::has('account_activated'))
                <div class="alert alert-success">
                 {{ Session::get('account_activated')}}
                 </div>
                 
                 @endif
                 

</div>


                
                 
				<div class="row">
					<div class="col-sm-5" style="margin-top:15px; margin-bottom:15px;">
						<div class="basic-login">
							<form  role="form">
								<div class="form-group">
		        				 	<label for="login-username"><i class="icon-user"></i> <b>Username or Email</b></label>
									<input class="form-control" id="login-username" type="text" placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="login-password" type="password" placeholder="">
								</div>
								<div class="form-group">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
			  {{ HTML::link('/user/password_reset', 'Forgot Password?') }}
									<button type="submit" class="btn pull-right">Login</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-7 social-login">
						<p>Or login with your Facebook or Twitter</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Login with Facebook</a>
							<a href="#" class="btn-twitter-login">Login with Twitter</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							<p>Not a member? 			  {{ HTML::link('/user/registration', 'Register here') }}
</p>
						</div>
					</div>
				</div>
			</div>
			@stop