@extends('layouts.master')
@section('title', 'Lionhub')
@section('content')

<div class="container shadow"  style="background-color:#FFF;">
<h2>Our Clients</h2>
<div class="row"> 

<div class="col-md-12" >




   <div class="products-slider">
							<!-- project Slider Item -->
							<div class="shop-item">
								<!-- Product Image -->
								<div class="image">
									<a href="#"><img src="img/Clients/3day-startup.png"></a>
								</div>
								<!-- Product Title -->
								<div class="title">
									<h3><a href="#">3 DAY STARTUP</a></h3>
								</div>
								
							</div>
							
							<div class="shop-item">
								<!-- projectImage -->
								<div class="image">
									<a href="#"><img src="img/Clients/88mph.png"></a>
								</div>
								<!-- project Title -->
								<div class="title">
									<h3><a href="#">88 mph</a></h3>
								</div>
								
							</div>
							<div class="shop-item">
								<!-- project Image -->
								<div class="image">
									<a href="#"><img src="img/Clients/lionafrica.png"></a>
								</div>
								<!-- projectt Title -->
								<div class="title">
									<h3><a href="#">Lion Africa</a></h3>
								</div>
								
							</div>
							<div class="shop-item">
								<!-- project Image -->
								<div class="image">
								<a href="#"><img src="img/Clients/gew.png"></a>
								</div>
								<!-- project Title -->
								<div class="title">
									<h3><a href="#">Gew</a></h3>
								</div>
								<!-- project Price -->
								
							</div>
							<div class="shop-item">
								<!-- project Image -->
								<div class="image">
										<a href="#"><img src="img/Clients/microsoft.png"></a>
								</div>
								<!-- project Title -->
								<div class="title">
									<h3><a href="#">Microsoft</a></h3>
								</div>
								
							</div>
							<!-- End project Slider Item -->
							<div class="shop-item">
								<div class="image">
									<a href="#"><img src="img/Clients/l5labs.png"></a>
								</div>
								<div class="title">
									<h3><a href="#">L5 labs</a></h3>
								</div>
								
							</div>
							<div class="shop-item">
								<div class="image">
									<a href="#"><img src="img/Clients/google.png"></a>
								</div>
								<div class="title">
									<h3><a href="#">google</a></h3>
								</div>
								
							</div>
							
							
							
							<div class="shop-item">
								<div class="image">
									<a href="#"><img src="img/Clients/3day-startup.png"></a>
								</div>
								<!-- Product Title -->
								<div class="title">
									<h3><a href="#">3 DAY STARTUP</a></h3>
								</div>
								
							</div>
							
							
							
						</div>

  
	        		
</div>



</div>
</div>
<div class="container shadow"  style="background-color:#FFF;">
	        	<div class="row">
	        		<!-- Featured News -->
	        		<div class="col-sm-6 featured-news">
	        			<h2>THE HUB</h2>
                        
                        
                        <div class="single-post-content" style="border-bottom:none;">
								<p>
								<span style="font-weight:900">Amidst the chaos of unemployment and poor education, </span>	Africa is currently exhibiting strong indications of massive growth and development. According to IGL, Africa is not only geographically larger than the U.S., Europe, and China combined, but also represents huge challenges and vast untapped potential. The Nigeria Bureau of Statistics reported a massive GDP growth in April nearly doubling the original rebase calculation. 
								</p>
								<p>
									The report clearly showed that this was made possible by the little investment of the government in the Agricultural Sector while Manufacturing still suffered a huge lot. UNN is a large University with a hardworking culture and mindset, has the largest Library in West Africa and is equipped with one of the best Internet Connections in Nigeria.Albeit, a lot of students still pass through fire and brimstone in order to learn and end up in an even more disastrous job pool.
								</p>
								<p style="border-bottom:none;">
									Given the vast positive changes going on in entrepreneurship globally, it is very inappropriate that youths with excellent dreams will attend the University in order to build their career and future but still end up helpless at the end of their programme. The goal of LionHUB thus is to bridge this gap, by teaching how to tap into these huge untapped potentials, become self-employed and create more jobs. Although LionHUB will not be able to cater for everyone, the general idea is to select the best of the best with great ideas and ensure that the harsh environment generally obtainable in Nigeria does not kill the dream of our promising youth.
								</p>
                            
	        			</div>
	        			
	        		</div>
	        		<!-- End Featured News -->
	        		<!-- Latest News -->
	        		<div class="col-sm-6 latest-news">
	        			<h2>THE NEED</h2>
	        			
	        					
					<div class="row">
					<!-- video -->
					<div class="col-sm-12">
						<!-- Author Photo -->
	
	
                    <div class="widget-container widget-video boxed">
                        <video id="video1" controls preload="auto" poster="img/poster/poster.png"
                         class="video-js vjs-styled-skin">
                            <source src="video/LionHUB UNN Video Presentation.mp4" type="video/mp4">
                        </video>
                        <br clear="all">
                        
                      {{ HTML::link('download', 'Click to download video') }}
                        <script>
                            videojs("video1", {
                                "height": "auto",
                                "width": "auto"
                            }).ready(function() {
                                var myPlayer = this; // Store the video object
                                var aspectRatio = 342 / 536; // Make up an aspect ratio
                                function resizeVideoJS() {
                                    // Get the parent element's actual width
                                    var width = document.getElementById(myPlayer.id()).parentElement.offsetWidth;
                                    // Set width to fill parent element, Set height
                                    myPlayer.width(width).height(width * aspectRatio);
                                }
                                resizeVideoJS(); // Initialize the function
                                window.addEventListener("resize", resizeVideoJS, false); // Call the function on resize
                            });
                        </script>
                    </div>
              
                    </div>
						
                    </div>
					</div>	
	        		</div>
	        		<!-- End Featured News -->
	        	</div>
	        </div>


			
			
			

@stop
