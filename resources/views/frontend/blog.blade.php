@extends('layouts.site')
@section('content')
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
			<div class="container">
				<div class="pbmit-title-bar-content">
					<div class="pbmit-title-bar-content-inner">
						<div class="pbmit-tbar">
							<div class="pbmit-tbar-inner container">
								<h1 class="pbmit-tbar-title"> Our Blog</h1>
							</div>
						</div>
						<div class="pbmit-breadcrumb">
							<div class="pbmit-breadcrumb-inner">
								<span>
									<a title="" href="/" class="home"><span>{{$settings['Company_Name']}}</span></a>
								</span>
								<span class="sep">
									<i class="pbmit-base-icon-angle-right"></i>
								</span>
								<span><span class="post-root post post-post current-item"> Blog</span></span>
							</div>
						</div>
					</div>
				</div> 
			</div> 
		</div>
		<!-- Title Bar End-->

    <!-- Blog Grid Col 4 -->
		<section class="section-md">
			<div class="container-fluid px-4">
				<div class="row pbmit-element-posts-wrapper">
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-01b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="How To Choose The Right  Furniture Of Your Home">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">How To Choose The Right  Furniture Of Your Home</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-02b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="Frequently Utilized Metal Welding System">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">Frequently Utilized Metal Welding System</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-03b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="How Does One Go About Buying Furniture?">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">How Does One Go About Buying Furniture?</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-04b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="Four Ways for Creating Extra Space in Small Homes">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">Four Ways for Creating Extra Space in Small Homes</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-05b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="Things to Consider While Selecting the Ideal Sofa">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">Things to Consider While Selecting the Ideal Sofa</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-06b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="Top 10 Tips for Your Kitchen Interior Design">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">Top 10 Tips for Your Kitchen Interior Design</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-07b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="The Golden Ratio Rule for Best 2D Sketch">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">The Golden Ratio Rule for Best 2D Sketch</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
					<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
						<div class="post-item">
							<div class="pbminfotech-box-content">
								<div class="pbmit-featured-container">
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-08b.jpg" class="img-fluid" alt="">
										</div>
									</div>
									<a class="pbmit-blog-btn" href="blog-single-details.html" title="Color Schemes for Your Home That Will Greet Spring">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-pbmit-up-arrow"></i>
										</span>
									</a>
									<a class="pbmit-link" href="blog-single-details.html"></a>
								</div>
								<div class="pbmit-content-wrapper">
									<div class="pbmit-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i>May  5, 2024
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i><span>By</span>admin
											</span>
										</div>
									</div>
									<h3 class="pbmit-post-title">
										<a href="blog-single-details.html">Color Schemes for Your Home That Will Greet Spring</a>
									</h3>
									<div class="pbminfotech-box-desc">
										Modest, recently established interior design company that seeks to address a variety of topics, including… 
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>
		<!-- Blog Grid Col 4 End -->

@endsection