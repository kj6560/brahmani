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
							<a title="" href="#" class="home"><span>Xinterio</span></a>
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
										Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo et dolo
										cupidatat non proident, sunt in culpa qui officia deserunt anim id est laborum.
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
							<form class="contact-form" method="post" action="/storeQuery">
								@csrf
								<div style="display: none;">
									<input type="text" name="address" value="">
								</div>
								<div class="row">
									<div class="col-md-12">
										<textarea name="message" cols="40" rows="10" class="form-control" id="message"
											placeholder="" required>{{old('message') ?? ""}}</textarea>
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Your Name *" name="name"
											value="{{old('name') ?? ''}}" required>
									</div>

									<div class="col-md-6">
										<input type="tel" class="form-control" placeholder="Your Phone *" name="phone"
											value="{{old('phone') ?? ''}}" required>
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
				<iframe
					src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
					title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
			</div>
		</div>
	</section>
	<!-- Iframe End-->

</div>
<!-- Contact Us Content End -->

@endsection
@section('custom_javascript')
<script>
	const textarea = document.getElementById('message');
	const placeholderText = `To Get Best Quotes describe your requirements in detail like:
- What are you looking for
-Features / Specifications
-Application / Usage
-Minimum Order Quantity etc.
`;

	textarea.value = placeholderText;

	textarea.addEventListener('focus', () => {
		if (textarea.value === placeholderText) {
			textarea.value = ''; // Clear placeholder text on focus
		}
	});

	textarea.addEventListener('blur', () => {
		if (textarea.value.trim() === '') {
			textarea.value = placeholderText; // Restore placeholder text if empty
		}
	});
</script>
@endsection