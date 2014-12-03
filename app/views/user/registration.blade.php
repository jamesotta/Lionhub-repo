@extends('layouts.masteri')
@section('title', '	User >> Registration')
@section('content')
    
<div class="container shadow" style="background-color:#FBFBFB;">

    <div class="col-sm-9">
        <div class="blog-post blog-single-post">
            <!-- sign up div -->
            <div class="post-coments">
                <!-- signup Form -->
                <div class="single-post-content">
               
               @if($errors->has())
                <div class="alert alert-danger">
             <a class="close" data-dismiss="alert" href="#">&times;</a>
             Please scroll down to fix the errors  and submit
                
                </div>
                
                 @endif
                
                @if(Session::has('error-account-register'))
                <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#">&times;</a>
                {{ Session::get('error-account-register')}}
                
                </div>
                
                 @endif
                 
                @if(Session::has('success-register'))
                <div class="alert alert-success">
                <a class="close" data-dismiss="alert" href="#">&times;</a>
                 {{ Session::get('success-register')}}
                 </div>
                 
                 @endif
                    <p>
                       The application stage is a 3 – 12 weeks period by which interested applicants are expected to quickly submit their applications in order to gain admission into the Hub. During this stage, they are expected to answer questions in their application form, submit a business plan and subsequently take a physical interview which will help analyze their readiness and ultimately determine if they will be admitted into the program or not.
                    </p>
                    <p>
                       The first three weeks opens up the application website, http://lionhub.unn.edu.ng/apply. Here the team which most consist of 2 – 5 persons is expected to answer questions about their business idea, their current skillset and their team. After applications close, the ICT and Business Coordinators of LionHUB will each perform their own separate analysis directly on the website during a 3 week period. 
                    </p>
                    <p>
                     After which the final results are automatically calculated and up to 50 are published for the second stage. During the second stage, the shortlisted applicants have 2 weeks to submit their full business plans containing their executive summary. The review process begins again and after 2 weeks, 30 participants will be shortlisted for interview and required to appear for physical interview shared among the coordinators in a two week period, after which the final results are published. Up to 20 teams and maximum of 50 students will be admitted at the final stage.
                    </p>
                    

                   <form action="{{URL::route('account_save')}}" method="post">
                        <div class="form-group form-horizontal">
                            {{ Form::label('Yourname', 'Your name') }}
                            


                             @if($errors->has ('Yourname'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('Yourname')}}</p>
                             @endif
                             
                             {{ Form::text('Yourname', null, array('class'=>'form-control', 'id'=>'Yourname', 'style'=>'width:47%', 'placeholder'=>'Your Name')) }}
                             
                           
                        </div>
                        <div class="form-group form-horizontal">
                            {{ Form::label('state', 'State Of Origin') }} 
                             
                             @if($errors->has ('stateoforigin'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('stateoforigin')}}</p>
                             @endif
                           
                           {{ Form::text('stateoforigin', null, array('class'=>'form-control', 'id'=>'state', 'style'=>'width:47%', 'placeholder'=>'State Of Origin')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender') }}
                            
                            {{ Form::label('select01', 'State Of Origin') }} 
                             
                             @if($errors->has ('gender'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('gender')}}</p>
                             @endif
                            
                            
                            <select name="gender" class="form-control chzn-select"  id="select01" style="width:25%;">
                                <option value="Male">
                                    Male
                                </option>
                                <option value="Female">
                                    Female
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            {{ Form::label('dob', 'Date Of Birth') }} 
                            
                             @if($errors->has ('dob'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('dob')}}</p>
                             @endif
                            
                            {{ Form::text('dob', null, array('class'=>'form-control datepicker', 'id'=>'dob', 'style'=>'width:47%', 'placeholder'=>'Date Of Birth')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('phonenumber', 'Mobile Number') }} 
                            
                             @if($errors->has ('phonenumber'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('phonenumber')}}</p>
                             @endif
                            
                            {{ Form::text('phonenumber', null, array('class'=>'form-control', 'id'=>'phonenumber', 'style'=>'width:47%', 'placeholder'=>'Mobile Number')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email') }} 
                            
                             @if($errors->has ('email'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('email')}}</p>
                             @endif
                            
                            {{ Form::email('email', null, array('class'=>'form-control', 'id'=>'email', 'style'=>'width:47%', 'placeholder'=>'Email')) }}
                        </div>
                         <div class="form-group">
                            {{ Form::label('Username', 'Username') }} 
                            
                             @if($errors->has ('username'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('username')}}</p>
                             @endif
                            
                            {{ Form::text('username', null, array('class'=>'form-control', 'id'=>'Username', 'style'=>'width:47%', 'placeholder'=>'Desired Username')) }}
                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('Password', 'Password') }} 
                            
                            @if($errors->has ('password'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('password')}}</p>
                             @endif
                            
    <input class="form-control" id="Password" type="password" placeholder="Desired Password" name="password" style="width:47%">

                        </div>
                        
                         <div class="form-group">
                            {{ Form::label('Password_confirm', 'Confirm_Password') }} 
                              @if($errors->has ('password_confirm'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('password_confirm')}}</p>
                             @endif
                            
                   <input class="form-control" id="Password_confirm" type="password" placeholder="Desired Password" name="password_confirm" style="width:47%">
           
                        </div>
                     
                        
                        <div class="form-group">
                            {{ Form::label('profile', 'I am a(Choose from the drop down list)') }}
                            
                             @if($errors->has ('profile'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('profile')}}</p>
                             @endif
                            <label class="checkbox">
                            <input type="checkbox" name="profile[]" value="Developer" checked="checked" />
                            
                            Developer
                            </label>
                            <label class="checkbox">
                             <input type="checkbox" name="profile[]" value="Tech Enthusiast" />
                             
                             Tech Enthusiast
                            </label>
                            <label class="checkbox">
                             <input type="checkbox" name="profile[]" value="Graphics Designer"  />
                             Graphics Designer
                            </label>
                            <label class="checkbox">
                             <input type="checkbox" name="profile[]" value="Illustrator" />
                             Illustrator
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" name="profile-others" id="profile_others"/>Others 
                                
             <input type="text" name="profile[]" class="form-control" id="others-text" placeholder="Please specify"  style="display:none;"/> 
 
                            </label>
                        </div>
                        <div class="form-group">
                            {{ Form::label('productdevelop', 'Are you mostly developing your own products, or a consultancy/agency working on client projects?')}}
                             @if($errors->has ('productdevelop'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('productdevelop')}}</p>
                             @endif
                            <label class="checkbox">
                                {{Form::checkbox('productdevelop[]', 'Own Projects', true)}} Own Projects
                            </label>
                            <label class="checkbox">
                                {{Form::checkbox('productdevelop[]', 'Clients Projects')}} Client Projects
                            </label>
                            <label class="checkbox">
                           
              <input type="checkbox" name="productdevelop_others" id="productdevelop_others"/>Others 
                                
             <input type="text" name="productdevelop[]" class="form-control" id="product-others-text" placeholder="Please specify"  style="display:none;"/> 

                            </label>
                        </div>
                        <div class="form-group">
                            {{ Form::label('webprofficient', 'Web applications your are profficiet at')}}
                            
                             @if($errors->has ('webprofficient'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('profficient')}}</p>
                             @endif
                            
                            <label class="checkbox">
                                {{Form::checkbox('webprofficient[]', 'Php', true)}} Php
                            </label>
                            <label class="checkbox">
                                {{Form::checkbox('webprofficient[]', 'Ajax')}} Ajax
                            </label>
                           <label class="checkbox">
                                <input type="checkbox" name="webprofficient_others" id="webprofficient_others" >
                                Others
                                <input class="form-control" id="webprofficient_others_text" type="text" placeholder="Please specify" name="webprofficient[]" style="display:none;">
                            </label>
                        </div>
                        <div class="form-group">
                            {{ Form::label('mobileprofficient', 'What mobile application technologies are you familiar with at')}}
                            
                             @if($errors->has ('mobileprofficient'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('mobileprofficient')}}</p>
                             @endif
                            <label class="checkbox">
                                {{Form::checkbox('mobileprofficient[]', 'Android')}} Android
                            </label>
                            <label class="checkbox">
                                {{Form::checkbox('mobileprofficient[]', 'Java',  true)}} Java
                            </label>
                            <input type="checkbox" name="mobileprofficient_others" id="mobileprofficient_other">
                            Others
                            <input class="form-control" id="mobileprofficient_text" type="text" placeholder="Please Specify" name="mobileprofficient[]" style="display:none;">
                        </div>
                        <div class="form-group">
                            {{ Form::label('aboutyou', 'A brief about your hopes, aspirations, hobbies and any other non-geeky interests you would like to share ')}} 
                             @if($errors->has ('aboutyou'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('aboutyou')}}</p>
                             @endif
                            
                            {{ Form::textarea('aboutyou', null, array('class'=>'form-control',
                            'id'=>'aboutyou', 'rows'=>'5' )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('memberwhy', 'Why do you want to become a member of lion hub ')}} 
                            
                             @if($errors->has ('memberwhy'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('memberwhy')}}</p>
                             @endif
                            
                            {{ Form::textarea('memberwhy', null, array('class'=>'form-control', 'id'=>'memberwhy', 'rows'=>'5' )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('webtechnology', 'Web Design Technologies that you are proficient at Adobe Dreamweaver,Aptana Studio,Eclipse,FrontPage,NetBeans (Please fill all that apply in the box below) ')}} 
                            
                             @if($errors->has ('webtechnology'))
                          <p class="text-danger" style="color:#a94442;">

                             {{$errors -> first ('webtechnology')}}</p>
                             @endif
                            {{ Form::textarea('webtechnology',
                            null, array('class'=>'form-control', 'id'=>'webtechnology', 'rows'=>'5' )) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Submit', array('class'=>'btn btn-large pull-right'))}}
                        </div>
                        <div class="clearfix">
                        </div>
                    </form>
                    
                    {{Form::token()}}
                </div>
                <!-- End Comment Form -->
            </div>
            <!-- End Comments -->
        </div>
    </div>
</div></div>
@stop
