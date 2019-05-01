@extends('layouts.main')

@section('content')
	<!--// SubHeader \\-->
	<div class="ereaders-subheader">
		<div class="ereaders-subheader-text">
			<span class="ereaders-subheader-transparent"></span>
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
                		<h1>Наші контакти</h1>
                		<p>Ви можете скористатись послугою наші контакти.Телефонуйте за номером телефону вказаним нище.</p>
                	</div>
                </div>
            </div>
        </div>
        <div class="ereaders-breadcrumb">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<ul>
				            <li><a href="/">Домашня сторінка</a></li>
				            <li class="active">Наші контакти</li>
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
						<div class="ereaders-fancy-title">
							<h2>Телефонуй до нас!</h2>
							<div class="clearfix"></div>
							<p>Інтернет-книжковий магазин також пропонує скачування різних книг комп'ютерного спрямування. Особи, які бажають скачати книги можуть звернутись за допомогою до наших операторів.</p>
						</div>
						<div class="ereaders-contact-info">
							<ul>
								<li>
									<div class="ereaders-contact-info-wrap">
										<span><i class="icon ereaders-phone-call"></i><small></small></span>
										<h5>Наші оператори</h5>
										<p>+380 95 73 59 434 - Віталій</p>
										<p>380 73 69 323 - Олена</p>
									</div>
								</li>
								<li>
									<div class="ereaders-contact-info-wrap">
										<span class="second"><i class="icon ereaders-placeholder"></i><small></small></span>
										<h5>Наша електронна пошта</h5>
										<a href="mailto:yourdomain@name.com">admin1.books.gmail.com</a>
										<a href="mailto:yourdomain@name.com">admin2.books.gmail.com</a>
									</div>
								</li>
								<li>
									<div class="ereaders-contact-info-wrap">
										<span class="left"><i class="icon ereaders-envelope"></i><small></small></span>
										<h5>Повідомлення адміністратору</h5>
										<p>Щоб відправити повідомлення адміністратору заповніть поле нище.</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="ereaders-contact-wrap">
							<div class="ereaders-contact-form">
								<h2>Введіть повідомлення <span>нашому адміністратору</span></h2>
								<p>Також можете повідомити нам про помилку на нашому сайті тут.</p>
								<form method="post" class="myform" action="process-form.php">
									<ul>
										<li class="full-form">
											<textarea placeholder="Введіть повідомлення" name="Message"></textarea>
											<i class="fa fa-pencil-square-o"></i>
										</li>
										<li>
											<input value="Ім'я" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }" tabindex="0" type="text" name="name">
											<i class="fa fa-user"></i>
										</li>
										<li>
											<input value="Email" onblur="if(this.value == '') { this.value ='Email'; }" onfocus="if(this.value =='Email') { this.value = ''; }" tabindex="0" type="email" name="email">
											<i class="fa fa-envelope"></i>
										</li>
										<li class="full-width">
											<input type="submit" name="submit" value="Send Now">
											<span class="output_message"></span>
										</li>
									</ul>
								</form>
							</div>
							<div class="ereders-contact-map">
								<div id="map"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--// Main Section \\-->
		<!--// Main Section \\-->
        <div class="ereaders-main-section ereaders-partner-sliderfull">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<div class="ereaders-fancy-title">
							<h2>Our sponsored</h2>
							<div class="clearfix"></div>
							<p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used Books</p>
						</div>
                        <div class="ereaders-partner-slider">
                            <div class="ereaders-partner-slider-layer"> <a href="404.html"><img src="extra-images/partner-logo-1.png" alt=""></a> </div>
                            <div class="ereaders-partner-slider-layer"> <a href="404.html"><img src="extra-images/partner-logo-2.png" alt=""></a> </div>
                            <div class="ereaders-partner-slider-layer"> <a href="404.html"><img src="extra-images/partner-logo-3.png" alt=""></a> </div>
                            <div class="ereaders-partner-slider-layer"> <a href="404.html"><img src="extra-images/partner-logo-4.png" alt=""></a> </div>
                            <div class="ereaders-partner-slider-layer"> <a href="404.html"><img src="extra-images/partner-logo-5.png" alt=""></a> </div>
                            <div class="ereaders-partner-slider-layer"> <a href="404.html"><img src="extra-images/partner-logo-2.png" alt=""></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

	</div>
	<!--// Main Content \\-->
@endsection
