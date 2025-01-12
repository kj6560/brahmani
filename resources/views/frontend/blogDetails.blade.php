@extends('layouts.site')
@section('content')
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner container">
							<h1 class="pbmit-tbar-title"> {{$blog->title??""}}</h1>
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
							<span>
								<a title="" href="/blog" class="home"><span>Blogs</span></a>
							</span>
							<span class="sep">
								<i class="pbmit-base-icon-angle-right"></i>
							</span>
							<span><span class="post-root post post-post current-item"> {{$blog->title??""}}</span></span>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>
    <!-- Title Bar End-->
<!-- Blog Details -->
<section class="site-content blog-details">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 blog-right-col">
						<div class="row">
							<div class="col-md-12">
								<article>
									<div class="post blog-classic">    
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="{{asset('brahmani_frontend_assets')}}/images/blog/blog-02-img.jpg" class="img-fluid" alt="">
											</div>
										</div>  
										<div class="pbmit-blog-classic-inner">
											<div class="pbmit-blog-meta pbmit-blog-meta-top">
												<span class="pbmit-meta pbmit-meta-cat">
													<a href="blog-classic.html" rel="category tag">Interior</a>
												</span>
												<span class="pbmit-meta pbmit-meta-date">
													<i class="pbmit-base-icon-calendar-3"></i>
													<a href="/blog_detail" rel="bookmark">
														<time class="entry-date published" datetime="2023-08-29T09:05:54+00:00">{{date("M d, Y", strtotime($blog->published_at))}}</time>
														<time class="updated pbmit-hide" datetime="2023-10-19T05:42:54+00:00">May 22, 2024</time>
													</a>
												</span>
												<span class="pbmit-meta pbmit-meta-author">
													<i class="pbmit-base-icon-user-3"></i>by {{$blog->user_name??""}}
												</span>
												<span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
													<i class="pbmit-base-icon-chat-3"></i>3 Comments
												</span>			
											</div>
											<div class="pbmit-entry-content">
												{{$blog->content}}											
											</div>
											<div class="pbmit-blog-meta-bottom">
												<div class="pbmit-blog-meta-bottom-left">
													<span class="pbmit-meta-tags">
														<a href="blog-classic.html" rel="tag">Home</a>
														<a href="blog-classic.html" rel="tag">Kitchen Style</a>
													</span>
												</div>
											</div>
										</div>   
									</div> 
									<nav class="navigation post-navigation" aria-label="Posts">
										<div class="nav-links">
											@if (!empty($prevPost->id))
											<div class="nav-previous">
												<a href="/blog_detail/{{$prevPost->id}}" rel="prev">
													<span class="pbmit-post-nav-icon">
														<i class="pbmit-base-icon-left-arrow-1"></i>
														<span class="pbmit-post-nav-head">Previous Post</span>
													</span>
													<span class="pbmit-post-nav-wrapper">
														<span class="pbmit-post-nav nav-title">{{$prevPost->title??""}}</span> 
													</span>
												</a>
											</div>
											@endif
											@if (!empty($nextPost->id))
											<div class="nav-next">
												<a href="/blog_detail/{{$nextPost->id}}" rel="next">
													<span class="pbmit-post-nav-icon">
														<span class="pbmit-post-nav-head">Next Post</span>
														<i class="pbmit-base-icon-next"></i>
													</span>
													<span class="pbmit-post-nav-wrapper">
														<span class="pbmit-post-nav nav-title">{{$nextPost->title??""}}</span> 
													</span>
												</a>
											</div>
											@endif
											
										</div>
									</nav>
									<!-- <div class="pbmit-author-box">
										<div class="pbmit-author-image">
										   <img alt="" src="{{asset('brahmani_frontend_assets')}}/images/author.png" class="img-fluid">			
										</div>
										<div class="pbmit-author-content">
											<span class="pbmit-author-name">
												<a href="blog-classic.html" title="Posted by admin" rel="author">admin</a>
											</span>
											<p class="pbmit-text pbmit-author-bio">Founder and Creative Director of Blog, an independent digital creative studio based out in 2011. He has over 15 years experience.</p>
										</div>
									</div> -->
								</article>
								<!-- <div class="comments-area">
									<h2 class="comments-title">3 Replies to “Frequently Utilized Metal Welding System”</h2>
									<ul class="comment-list">
										<li class="comment depth-1">
											<div class="pbmit-comment">
												<div class="pbmit-comment-avatar">
													<img src="{{asset('brahmani_frontend_assets')}}/images/avtar/img-01.jpg" class="img-fluid" alt="">
												</div>
												<div class="pbmit-comment-content">
													<div class="pbmit-comment-meta">
														<span class="pbmit-comment-author">by
															<span class="pbmit-comment-author-inner">John Doe</span>
														</span>
														<span class="pbmit-comment-date">
															<a href="#">2 months ago</a>
														</span>
													</div>
													<p>Vivamus gravida felis et nibh tristique viverra. Sed vel tortor id ex accumsan lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus</p>
													<div class="reply">
														<a href="#">Reply</a>
													</div>
												</div>
											</div>
											<ul class="children">
												<li>
													<div class="pbmit-comment">
														<div class="pbmit-comment-avatar">
															<img src="{{asset('brahmani_frontend_assets')}}/images/avtar/img-02.jpg" alt="">
														</div>
														<div class="pbmit-comment-content">
															<div class="pbmit-comment-meta">
																<span class="pbmit-comment-author">by
																	<span class="pbmit-comment-author-inner">Leona Spencer</span>
																</span>
																<span class="pbmit-comment-date">
																	<a href="#">2 months ago</a>
																</span>
															</div>
															<p>Sed maximus imperdiet ipsum, id scelerisque nisi tincidunt vitae. In lobortis neque nec dolor vehicula, eget vulputate ligula lobortis.</p>
															<div class="reply">
																<a href="#">Reply</a>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="pbmit-comment">
												<div class="pbmit-comment">
													<div class="pbmit-comment-avatar">
														<img src="{{asset('brahmani_frontend_assets')}}/images/avtar/img-01.jpg" alt="">
													</div>
													<div class="pbmit-comment-content">
														<div class="pbmit-comment-meta">
															<span class="pbmit-comment-author">by
																<span class="pbmit-comment-author-inner">John Doe</span>
															</span>
															<span class="pbmit-comment-date">
																<a href="#">2 month ago</a>
															</span>
														</div>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius, sunt porro corporis maiores ea, voluptatibus omnis maxime.</p>
														<div class="reply">
															<a href="#">Reply</a>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<div class="comment-respond">
										<h3 class="comment-reply-title">Leave a Reply </h3>
										<div class="comment-form">
											<p class="comment-notes">Your email address will not be published. Required fields are marked *</p>
											<form>
												<div class="row">
													<div class="col-sm-12">
														<textarea class="form-control" id="comment" placeholder="Enter your comment here..." name="comment" cols="45" rows="8"></textarea>
													</div>
													<div class="col-sm-6"> 
														<input id="name" type="text" placeholder="Name" class="form-control" name="name">
													</div>
													<div class="col-sm-6"> 
														<input id="email" class="form-control" placeholder="Email" name="email" type="email" value="">
													</div>
													<div class="col-sm-12"> 
														<input id="url" class="form-control" placeholder="Website" name="url" type="text" value="">
													</div>
													<div class="col-sm-12">
														<div class="form-check">
															<input class="form-check-input" type="checkbox">
															<label class="form-check-label">
																Save my name, email, and website in this browser for the next time I comment.
															</label>
														</div>
													</div>
													<div class="col-sm-12"> 
														<button type="submit" class="pbmit-submit-button">Post Comment</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div> -->
							</div> 
						</div>
					</div>
					<div class="col-md-12 col-lg-3 blog-left-col">
						<aside class="sidebar">
							<aside class="widget widget-search">
								<h2 class="widget-title">Search</h2>
								<form class="search-form">
									<input type="search" class="search-field" placeholder="Search …" value="">
									<button type="submit" class="search-submit"></button>
								</form>
							</aside>
							<aside class="widget widget-categories">
								<h2 class="widget-title">Categories</h2>
								<ul>
									<li>
										<span class="pbmit-cat-li">
											<a href="blog-classic.html">Architecture</a>
											<span class="pbmit-brackets">( 1 )</span>
										</span>
									</li>
									<li>
										<span class="pbmit-cat-li">
											<a href="blog-classic.html">Bedroom</a>
											<span class="pbmit-brackets">( 2 )</span>
										</span>
									</li>
									<li>
										<span class="pbmit-cat-li">
											<a href="blog-classic.html">Design</a>
											<span class="pbmit-brackets">( 2 )</span>
										</span>
									</li>
									<li>
										<span class="pbmit-cat-li">
											<a href="blog-classic.html">Furniture</a>
											<span class="pbmit-brackets">( 2 )</span>
										</span>
									</li>
									<li>
										<span class="pbmit-cat-li">
											<a href="blog-classic.html">Interior</a>
											<span class="pbmit-brackets">( 1 )</span>
										</span>
									</li>
									<li>
										<span class="pbmit-cat-li">
											<a href="blog-classic.html">Kitchen</a>
											<span class="pbmit-brackets">( 1 )</span>
										</span>
									</li>
								</ul>
							</aside>
							<aside class="widget widget-recent-post">
								<h2 class="widget-title">Recent Posts</h2>
								<ul class="recent-post-list">
									<li class="recent-post-list-li"> 
										<a class="recent-post-thum" href="/blog_detail">
											<img src="{{asset('brahmani_frontend_assets')}}/images/recent-post/blog-01.jpg" class="img-fluid" alt="">
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-date">
												<a href="/blog_detail">May 9, 2024</a>
											</span>
											<span class="pbmit-rpw-title">
												<a href="/blog_detail">How To Choose The Right  Furniture Of Your Home</a>
											</span>
										</div> 
									</li>
									<li class="recent-post-list-li"> 
										<a class="recent-post-thum" href="/blog_detail">
											<img src="{{asset('brahmani_frontend_assets')}}/images/recent-post/blog-02.jpg" class="img-fluid" alt="">
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-date">
												<a href="/blog_detail">May 9, 2024</a>
											</span>
											<span class="pbmit-rpw-title">
												<a href="/blog_detail">Frequently Utilized Metal Welding System</a>
											</span>
										</div> 
									</li>
									<li class="recent-post-list-li"> 
										<a class="recent-post-thum" href="/blog_detail">
											<img src="{{asset('brahmani_frontend_assets')}}/images/recent-post/blog-03.jpg" class="img-fluid" alt="">
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-date">
												<a href="/blog_detail">May 9, 2024</a>
											</span>
											<span class="pbmit-rpw-title">
												<a href="/blog_detail">How Does One Go About Buying Furniture?</a>
											</span>
										</div> 
									</li>
								</ul>
							</aside> 
							<aside class="widget widget-tag-cloud">
								<h3 class="widget-title">Tag Cloud</h3>
								<div class="tagcloud">
									<a href="blog-classic.html" class="tag-cloud-link">Architecture</a>
									<a href="blog-classic.html" class="tag-cloud-link">Designs</a>
									<a href="blog-classic.html" class="tag-cloud-link">Execute</a>
									<a href="blog-classic.html" class="tag-cloud-link">Exterior</a>
									<a href="blog-classic.html" class="tag-cloud-link">Home</a>
									<a href="blog-classic.html" class="tag-cloud-link">Kitchen Style</a>
									<a href="blog-classic.html" class="tag-cloud-link">Modern</a>
									<a href="blog-classic.html" class="tag-cloud-link">Planning</a>
								</div>
							</aside> 
							<aside class="widget pbmit-service-ad">
								<div class="textwidget">
									<div class="pbmit-service-ads">
										<h5 class="pbmit-ads-subheding">Our Newsletter</h5>
										<h4 class="pbmit-ads-subtitle">Ready to start learn ?</h4>
										<h3 class="pbmit-ads-title">Sign up now!</h3>
										<div class="pbmit-ads-desc">
											<i class="pbmit-base-icon-phone-call-1"></i>+(123) 1234-567-8901
										</div>
										<a class="pbmit-btn pbmit-btn-hover-white" href="#">
											<span class="pbmit-button-content-wrapper">
												<span class="pbmit-button-text">Register now</span>
											</span>
										</a>
									</div>
								</div>
							</aside>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Details End -->
@endsection