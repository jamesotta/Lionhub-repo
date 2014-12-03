@extends('layouts.reset')
@section('title', '	User >> Password Reset')
@section('content')


<div class="col-md-12">


<ul class="breadcrumb" >
<li>{{ HTML::link('/user/login', 'Login') }} <span class="divider">&rarr;</span></li>
<li>Reset Password</li>
</ul>


</div>
		
<div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="basic-login">
							<form>
								<div class="form-group">
		        				 	<label for="restore-email"><i class="icon-envelope"></i> <b>Enter Your Email</b></label>
									<input class="form-control" id="restore-email" type="text" placeholder="">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right">Reset Password</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		@stop