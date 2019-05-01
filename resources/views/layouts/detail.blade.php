@extends('layouts.main')

@section('content')
		<!--// Main Section \\-->
		<div class="ereaders-main-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="ereaders-book-wrap">
							<div class="row">
								<div class="col-md-5">
									<img src="/{{ $book->image }}" alt="" class="ereaders-book-thumb">
								</div>
								<div class="col-md-7">
									<div class="ereaders-detail-thumb-text">
										<h2>{{ $book->name }}</h2>
										<div class="star-rating"><span class="star-rating-box" style="width:60%"></span></div>
										<small>( Review 03 )</small>
										<div class="clearfix"></div>
										<span>$200.00<del>$300.00</del></span>
										<p>{{ $book->description  }}</p>
										<ul class="ereaders-detail-option">
											<li>
												<h6>Availability:</h6>
												<span>20 Piece in stock</span>
											</li>
											<li>
												<h6>Tags:</h6>
												<a href="404.html">ebook, </a>
												<a href="404.html">business, </a>
												<a href="404.html">author</a>
											</li>
											<li>
												<h6>Product Code:</h6>
												<span> CA78963</span>
											</li>
										</ul>
										<div class="ereaders-number-select">
		                    				<label>QTY:</label><input value="01" min="01" max="10" type="number">
		                    			</div>
		                    			<a href="404.html" class="ereaders-detail-btn">Add To Cart <i class="icon ereaders-shopping-bag"></i></a>
		                    			<a href="404.html" class="ereaders-detail-btn">Wishlist <i class="icon ereaders-shopping-bag"></i></a>
		                    			<a href="404.html" class="ereaders-detail-btn">Compare <i class="icon ereaders-shopping-bag"></i></a>
		                    			<ul class="ereaders-detail-social">
											<li><h6>Share This Product:</h6></li>
											<li><a href="../../../https@www.facebook.com/default.htm" class="fa fa-facebook"></a></li>
											<li><a href="../../../https@twitter.com/login@lang=en" class="fa fa-twitter"></a></li>
											<li><a href="../../../https@www.pinterest.com/login/default.htm" class="fa fa-pinterest-p"></a></li>
											<li><a href="../../../https@plus.google.com/default.htm" class="fa fa-google-plus"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<h2 class="ereaders-section-heading">Book Description</h2>
						<div class="ereaders-rich-editor">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique erat accumsan eros mattis aliquam. Praesent non accumsan mauris, non maximus libero Vestibulum scelerisque enim turpis. Duis justo ante, aliquam ac tempus et, porta vitae leo. Morbi sed diam pharetra eros maximus porttitor et in tellus. Sed ligula tellus, elementum vehicula lorem a, malesuada euismod eros. Aenean purus lacus, mattis vitae ipsum et, condimentum pulvinar arcu.</p>
							<p>Ut porta massa in risus maximus, eget sodales massa malesuada. Fusce et neque aliquet, mollis tellus ut, rutrum nunc. Cras congue magna et velit accumsan tempor. Etiam tempor nisi in tortor sagittis pharetra. Phasellus ut pulvinar risus. Nulla odio ipsum, sagittis at libero sed, sollicitudin euismod est. Phasellus congue, justo eget bibendum aliquet, neque elit vulputate magna,</p>
						</div>
						<h2 class="ereaders-section-heading">Book Detail</h2>
						<div class="ereaders-book-detail">
							<p>Morbi condimentum, ex ac aliquam congue, sapien eros commodo dolor, eu semper mauris arcu non mauris. Aliquam erat volutpat. Phasellus non nisi ligula. Phasellus accumsan nunc vitae enim interdum fringilla. Integer vel elementum diam.</p>
							<ul>
								<li>
									<h6>Book Title</h6>
									<p>Cover Book MockUp By ebook Pro</p>
								</li>
								<li>
									<h6>Author</h6>
									<p>Murial Barbery</p>
								</li>
								<li>
									<h6>Book Type</h6>
									<p>Business And Accounts</p>
								</li>
								<li>
									<h6>Date Published</h6>
									<p>December 13, 2017</p>
								</li>
								<li>
									<h6>Specification</h6>
									<p>Management And Technology</p>
								</li>
								<li>
									<h6>Chapters & Pages</h6>
									<p>12 Chapters And 550 Pages</p>
								</li>
							</ul>
						</div>
						<div class="comments-area ereaders-book-reply">
                          <!--// coments \\-->
                          <h2 class="ereaders-section-heading">Book Reviews</h2>
                          <ul class="comment-list">
                            <li>
                                <div class="thumb-list">
                                   <figure><img alt="" src="extra-images/comment-img1.jpg"></figure>
                                   <div class="text-holder">
                                   	<h6>Sarena Doe</h6>
                                   	<time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time><br>
                                   	<div class="star-rating"><span class="star-rating-box" style="width:25%"></span></div>
                                      <p>Nam ut egestas nibh. Phasellus sollicitudin tempus neque quis gravida. Aenean a eros at ex pharetra suscipit. Proin iaculis ipsum ac ullamcorper pretium. Morbi ut leo eu felis commodo porta.</p>
                                      <a class="comment-reply-link" href="#">Like</a>
                                      <a class="comment-reply-link" href="#">Reply</a>
                                   </div>
                                </div>
                                <ul class="children">
                                   <li>
                                      <div class="thumb-list">
                                       <figure><img alt="" src="extra-images/comment-img2.jpg"></figure>
                                       <div class="text-holder">
                                       	<h6>Sarena Doe</h6>
                                       	<time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time><br>
                                       	<div class="star-rating"><span class="star-rating-box" style="width:25%"></span></div>
                                          <p>Donec ullamcorper vulputate quam pharetra tempus. Nam mi eros, porta vitae tempus sit amet, blandit non elit. Cras aliquet massa non quam molestie facilisis. Duis sollicitudin mattis ante, sed suscipit mi blandit et.</p>
                                       </div>
                                    </div>
                                   </li>
                                   <!-- #comment-## -->
                                </ul>
                             </li>
                             <li>
                                <div class="thumb-list">
                                   <figure><img alt="" src="extra-images/comment-img3.jpg"></figure>
                                   <div class="text-holder">
                                   	<h6>Sarena Doe</h6>
                                   	<time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time><br>
                                   	<div class="star-rating"><span class="star-rating-box" style="width:25%"></span></div>
                                      <p>Donec sed viverra ligula, ut mollis libero. Vivamus imperdiet elementum massa vitae tempor. Suspendisse vel sem id libero ullamcorper sollicitudin. Nunc ut dictum nibh.</p>
                                      <a class="comment-reply-link" href="#">Like</a>
                                  	  <a class="comment-reply-link" href="#">Reply</a>
                                   </div>
                                </div>
                                <!-- .children -->
                             </li>
                          </ul>
                          <!--// coments \\-->

                          <!--// comment-respond \\-->
                          <div class="comment-respond">
                             <h2 class="ereaders-section-heading">lEAVE a rEPLY</h2>
                             <form>
                                <p class="ereaders-full-form">
                                   <textarea name="comment" placeholder="Comment"></textarea>
                                   <i class="fa fa-pencil-square-o"></i>
                                </p>
                                <p>
                                   <input type="text" value="Name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                   <i class="fa fa-user"></i>
                                </p>
                                <p>
                                   <input type="email" value="Email" onblur="if(this.value == '') { this.value ='Email'; }" onfocus="if(this.value =='Email') { this.value = ''; }">
                                   <i class="fa fa-envelope"></i>
                                </p>
                                <p>
                                   <input type="text" value="Website" onblur="if(this.value == '') { this.value ='Website'; }" onfocus="if(this.value =='Website') { this.value = ''; }">
                                   <i class="fa fa-globe"></i>
                                </p>
                                <p><input type="submit" value="Submit Now" class="submit"></p>
                             </form>
                          </div>
                          <!--// comment-respond \\-->
                        </div>
                        <h2 class="ereaders-section-heading">Related books</h2>
                        <div class="ereaders-books ereaders-book-grid ereaders-book-related">
							<ul class="row">
								<li class="col-md-3">
									<figure>
										<a href="book-detail.html"><img src="extra-images/book-grid-img1.jpg" alt=""></a>
										<figcaption>
											<a href="#" class="icon ereaders-link" data-toggle="tooltip" title="Add To Link"></a>
											<a href="#" class="icon ereaders-heart" data-toggle="tooltip" title="Add To Wishlist"></a>
											<a href="#" class="icon ereaders-reload" data-toggle="tooltip" title="Reload"></a>
										</figcaption>
									</figure>
									<div class="ereaders-book-grid-text">
										<h2><a href="book-detail.html">Corporate Business</a></h2>
										<span>$200.00</span>
										<small>Lorem ipsum dolor</small>
										<a href="book-detail.html" class="ereaders-simple-btn ereaders-bgcolor">Add To Cart</a>
									</div>
								</li>
								<li class="col-md-3">
									<figure>
										<a href="book-detail.html"><img src="extra-images/book-grid-img7.jpg" alt=""></a>
										<figcaption>
											<a href="#" class="icon ereaders-link" data-toggle="tooltip" title="Add To Link"></a>
											<a href="#" class="icon ereaders-heart" data-toggle="tooltip" title="Add To Wishlist"></a>
											<a href="#" class="icon ereaders-reload" data-toggle="tooltip" title="Reload"></a>
										</figcaption>
									</figure>
									<div class="ereaders-book-grid-text">
										<h2><a href="book-detail.html">Corporate Business</a></h2>
										<span>$200.00</span>
										<small>Lorem ipsum dolor</small>
										<a href="book-detail.html" class="ereaders-simple-btn ereaders-bgcolor">Add To Cart</a>
									</div>
								</li>
								<li class="col-md-3">
									<figure>
										<a href="book-detail.html"><img src="extra-images/book-grid-img2.jpg" alt=""></a>
										<figcaption>
											<a href="#" class="icon ereaders-link" data-toggle="tooltip" title="Add To Link"></a>
											<a href="#" class="icon ereaders-heart" data-toggle="tooltip" title="Add To Wishlist"></a>
											<a href="#" class="icon ereaders-reload" data-toggle="tooltip" title="Reload"></a>
										</figcaption>
									</figure>
									<div class="ereaders-book-grid-text">
										<h2><a href="book-detail.html">Corporate Business</a></h2>
										<span>$200.00</span>
										<small>Lorem ipsum dolor</small>
										<a href="book-detail.html" class="ereaders-simple-btn ereaders-bgcolor">Add To Cart</a>
									</div>
								</li>
								<li class="col-md-3">
									<figure>
										<a href="book-detail.html"><img src="extra-images/book-grid-img3.jpg" alt=""></a>
										<figcaption>
											<a href="#" class="icon ereaders-link" data-toggle="tooltip" title="Add To Link"></a>
											<a href="#" class="icon ereaders-heart" data-toggle="tooltip" title="Add To Wishlist"></a>
											<a href="#" class="icon ereaders-reload" data-toggle="tooltip" title="Reload"></a>
										</figcaption>
									</figure>
									<div class="ereaders-book-grid-text">
										<h2><a href="book-detail.html">Corporate Business</a></h2>
										<span>$200.00</span>
										<small>Lorem ipsum dolor</small>
										<a href="book-detail.html" class="ereaders-simple-btn ereaders-bgcolor">Add To Cart</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--// Main Section \\-->
@endsection
