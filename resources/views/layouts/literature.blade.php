@extends('layouts.main')

@section('content')
<!--// SubHeader \\-->
	<div class="ereaders-subheader">
		<div class="ereaders-subheader-text">
			<span class="ereaders-subheader-transparent"></span>
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
                		<h1>Books Grid</h1>
                		<p>Ut porta massa in risus maximus, eget sodales massa malesuada. Fusce et neque aliquet.</p>
                	</div>
                </div>
            </div>
        </div>
        <div class="ereaders-breadcrumb">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<ul>
				            <li><a href="index.html">Homepage</a></li>
				            <li class="active">Books Grid</li>
				        </ul>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <!--// SubHeader \\-->

	<!--// Main Content \\-->
	<div class="ereaders-main-content">

		<!--// Main Section \\-->
		<div class="ereaders-main-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="ereaders-books ereaders-book-grid">
							<ul class="row">
								@foreach($books as $book)
                                 <li class="col-md-3">
									<figure>
										<a href="book-detail.html"><img src="/{{ $book->image }}" alt=""></a>
										<figcaption>
											<a href="#" class="icon ereaders-link" data-toggle="tooltip" title="Add To Link"></a>
											<a href="#" class="icon ereaders-heart" data-toggle="tooltip" title="Add To Wishlist"></a>
											<a href="#" class="icon ereaders-reload" data-toggle="tooltip" title="Reload"></a>
										</figcaption>
									</figure>
									<div class="ereaders-book-grid-text">
										<h2><a href="book-detail.html">{{ $book->name  }}</a></h2>
										<span>$200.00</span>
										<small>Lorem ipsum dolor</small>
										<a href="book-detail.html" class="ereaders-simple-btn ereaders-bgcolor">Add To Cart</a>
									</div>
								</li>
                                @endforeach
                        </ul>
						</div>
						<!--// Pagination \\-->
                        <div class="ereaders-pagination">
                          <ul class="page-numbers">
                             <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="icon ereaders-arrow-point-to-right"></i></span></a></li>
                             <li><span class="page-numbers current">01</span></li>
                             <li><a class="page-numbers" href="404.html">02</a></li>
                             <li><a class="page-numbers" href="404.html">03</a></li>
                             <li><a class="page-numbers" href="404.html">04</a></li>
                             <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="icon ereaders-arrow-point-to-right"></i></span></a></li>
                          </ul>
                        </div>
                        <!--// Pagination \\-->
					</div>
				</div>
			</div>
		</div>
		<!--// Main Section \\-->
@endsection
