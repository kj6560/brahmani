@extends('layouts.site')
@section('content')

	<!--Page Title-->
	<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/9.jpg);margin-top:280px;">
    	<div class="auto-container">
        	<h2>Contact Us</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="col-6">
					<iframe frameborder="0" style="height:580px;width:99%;border:none;" src='https://forms.zohopublic.in/noreplyenquiry0/form/ENQUIRYNOW6/formperma/2S2lCXvljYSSiZ1skoFSda1sjVQv_WMIyn1D4_EeR1s'></iframe>
				</div>
				<div class="col-6">
                        <h1>Get In Touch</h1>
						<p><i class="fa fa-phone"></i> <a href="tel:{{$settings['Official_Number']}}" title="Call Us: {{$settings['Official_Number']}}">{{$settings['Official_Number']}}</a></p>

						
                        <p><i class="fa fa-globe"></i><a href="email:{{$settings['Official_Email']}}" title="{{$settings['Official_Email']}}"> {{$settings['Official_Email']}}</a></p>
                        <p><i class="fa fa-map-marker"></i> {{$settings['Office_Address']}}</p>

                        <div class="contacts">
                            <h4>Get in touch with social media</h4>
                            
							<div class="row text-center">
								<a href="{{$settings['Facebook_Link']??'#'}}" style="margin: 5px;"><span class="fa fa-facebook"></span></a>
								<a href="{{$settings['Twitter_Link']??'#'}}" style="margin: 5px;"><span class="fa fa-twitter"></span></a>
								<a href="{{$settings['Instagram_Link']??'#'}}" style="margin: 5px;"><span class="fa fa-instagram"></span></a>
								<a href="{{$settings['Pinterest_Link']??'#'}}" style="margin: 5px;"><span class="fa fa-pinterest-square"></span></a>
								<a href="{{$settings['Linkedin_Link']??'#'}}" style="margin: 5px;"><span class="fa fa-linkedin"></span></a>
							</div>
							
                        </div>
                </div>
			</div>
			
		</div>
	</section>
	<!-- End Faq Section -->
	
	<!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="auto-container">
            <div class="map-outer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.880062650001!2d73.141502014955!3d22.3203752853132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc9c757e5ab65%3A0x48bb386d94087c8e!2sGTS%20FILTERS%20AND%20SYSTEMS%20(INDIA)%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1638377411351!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="470px"></iframe>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@endsection