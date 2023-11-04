<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/two.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Human Stories</a></h2>
							<lable></lable>
							<h1><a href="#">Save the children of GAZA</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/1.webp" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Impact on Children</a></h2>
							<lable></lable>
							<h1><a href="#">How can we help children in Gaza?</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/2.webp" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Save humanity</a></h2>
							<lable></lable>
							<h1><a href="#">See it! Feel it! </a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/4.avif" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">The Destination</a></h1>
							<lable></lable>
							<h2><a href="#">OF children</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/one.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Ways to Help</a></h2>
							<lable></lable>
							<h1><a href="#">Children of the war</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->
</body>
</html>
