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
							<a title="" href="/" class="home"><span>Home</span></a>
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
			@foreach ($blogs as $blog)
			
				<article class="pbmit-ele-blog pbmit-blog-style-1 col-md-6 col-lg-3">
					<div class="post-item">
						<div class="pbminfotech-box-content">
							<div class="pbmit-featured-container">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="{{ url('/storage/'.$blog->featured_image) }}"
											class="img-fluid" alt="">
									</div>
								</div>
								<a class="pbmit-blog-btn" href="/blog_detail/{{$blog->id}}"
									title="How To Choose The Right  Furniture Of Your Home">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-pbmit-up-arrow"></i>
									</span>
								</a>
								<a class="pbmit-link" href="/blog_detail/{{$blog->id}}"></a>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-date-wraper d-flex align-items-center">
									<div class="pbmit-meta-date-wrapper pbmit-meta-line">
										<div class="pbmit-meta-date">
											<span class="pbmit-post-date">
												<i class="pbmit-base-icon-calendar-3"></i>{{date("M d, Y", strtotime($blog->published_at))}}
											</span>
										</div>
									</div>
									<div class="pbmit-meta-author pbmit-meta-line">
										<span class="pbmit-post-author">
											<i class="pbmit-base-icon-user-3"></i>{{$blog->user_name??""}}
										</span>
									</div>
								</div>
								<h3 class="pbmit-post-title">
									<a href="/blog_detail/{{$blog->id}}">{{$blog->title}}</a>
								</h3>
								<div class="pbminfotech-box-desc">
									{{$blog->small_desc}}…
								</div>
							</div>
						</div>
					</div>
				</article>
			@endforeach


		</div>
	</div>
</section>
<!-- Blog Grid Col 4 End -->

@endsection