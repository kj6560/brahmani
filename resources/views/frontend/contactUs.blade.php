@extends('layouts.site')
@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"> Contact Us</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<a title="home" href="/" class="home"><span>Home</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item"> Contact Us</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content">



	<!-- Contact Form -->
	<section class="pbmit-sticky-section">
		<div class="container">
			<div class="contact-us-bg">
				<div class="row">
					<div class="col-md-12 col-xl-5">
						<div class="pbmit-sticky-col">
							<div class="contact-us-left-area">
								<div class="pbmit-heading-subheading animation-style2">
									<h4 class="pbmit-subtitle">Contact Us</h4>
									<h2 class="pbmit-title">Happy to answer all your questions</h2>
									<div class="pbmit-heading-desc">
									Whether you're a homeowner, contractor, or architect, we're here to help. Get in touch with Brahmani Enterprises for inquiries, quotes, and expert consultations on all your construction material needs and project solutions.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-7">
						<div class="contact-form-area">
							<div class="pbmit-heading animation-style2">
								<h2 class="pbmit-title">Send a Message</h2>

							</div>
							<?php
                            if(!empty(Session::get('errors'))){
                                $er = get_object_vars(json_decode(Session::get("errors")));
                                foreach($er as $key => $value){
                                    echo '<div class="alert alert-danger">'.$value[0].'</div>';
                                }
                            }
                        ?>
							<form class="contact-form" method="post" action="/storeQuery">
								@csrf
								<div style="display: none;">
									<input type="text" name="address" value="">
								</div>
								<div class="row">
									
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Your Name *" name="name"
											value="{{old('name') ?? ''}}" required>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Your Email *" name="email"
											value="{{old('email') ?? ''}}" required>
									</div>

									<div class="col-md-6">
										<input type="tel" class="form-control" placeholder="Your Phone *" name="phone"
											value="{{old('phone') ?? ''}}" required>
									</div>
									<div class="col-md-6">
										<input type="tel" class="form-control" placeholder="Your Location *" name="location"
											value="{{old('location') ?? ''}}" required>
									</div>
									<div class="col-md-12">
										<textarea name="message" cols="40" rows="10" class="form-control" id="message"
											placeholder="message" required>{{old('message') ?? ""}}</textarea>
									</div>
									<div class="col-md-12">
										<button class="pbmit-btn pbmit-btn-outline">
											<i
												class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
											<span class="pbmit-button-content-wrapper">
												<span class="pbmit-button-text">Submit Now</span>
											</span>
										</button>
									</div>
									<div class="col-md-12 col-lg-12 message-status"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Form -->


	<!-- Iframe -->
	<section class="section-xl">
		<div class="container-fluid">
			<div class="iframe-area">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.284474292564!2d73.1693684!3d22.342885000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8d81649c68b%3A0xd37951746ee47c7f!2sBrahmani%20Enterprise%20(PVC%20Panels)!5e0!3m2!1sen!2sin!4v1736101539751!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
	<!-- Iframe End-->

</div>
<!-- Contact Us Content End -->

@endsection
