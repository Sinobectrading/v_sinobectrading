<!-- CONTACTS -->
<section id="contacts">
</section><!-- //CONTACTS -->
<div class="footer">
	<div class="f-bg-w3l">
			<div class="col-md-3 w3layouts_footer_grid">
				<h2>Demandez <span>Brochure</span></h2>
				<p>Pour obtenir votre brochure produit, entrez votre adresse e-mail.</p>
				<form action="../SinoBec_Book_1.pdf" method="get">
					<input type="email" name="Email" placeholder="Entrer votre Email..." required="">
					<button class="btn1"><i class="fa fa-2x fa-arrow-circle-o-down" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
				
			
			</div>
			<div class="col-md-4 w3layouts_footer_grid">
				<h3>Nos <span> Produits</span></h3>
				 <ul class="con_inner_text midimg">
					<li><a href="products.php"><img src="../images/90x90/01.jpg" alt="" class="img-responsive" /></a></li>
				    <li><a href="products.php"><img src="../images/90x90/02.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/03.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/04.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/05.jpg" alt="" class="img-responsive" /></a></li>
				    <li><a href="products.php"><img src="../images/90x90/06.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/07.jpg" alt="" class="img-responsive" /></a></li>
					<li><a href="products.php"><img src="../images/90x90/08.jpg" alt="" class="img-responsive" /></a></li>
			     </ul>
				
			</div>
			<div class="col-md-2 w3layouts_footer_grid">
				<h3>Produits  <span> Catégories</span> </h3>
				  <ul class="links">
						<li>Matière première d'aluminium</li>
						<li>Matériau intermédiaire en aluminium</li>
						<li>Acier inoxydable</li>
						<li>Produits finis</li>
					</ul>
			</div>
			<div class="col-md-3 w3layouts_footer_grid">
				<h2>Contactez <span> Nous</span></h2>
				    <ul class="con_inner_text">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>4455 Rue Cousens, St-Laurent <label> QC, Canada, H4S 1X5</label></li>
						<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@sinobectrading.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span> +1(514) 339 9333</li>
					</ul>

				<!-- <ul class="social_agileinfo">
					<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
				</ul> -->
			</div>


			<div class="clearfix"> </div>
				<p class="copyright">© 2017 Sinobec Trading. Tous les droits sont réservés | Concu par <a href="https://#/" target="_blank">Sinobec</a> | <?php if(isset($_SESSION["username"]) ) { ?> <a href="logout.php">Connectez - Out</a> <?php } if(!isset($_SESSION["username"]) ) { ?> <a href="login.php">S'identifier</a> <?php } ?> | <a href="privacy.php">Intimité</a></p>
			</div>
</div>
<!-- //footer -->

<!-- js -->
<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.countup.js"></script>
<script src="../js/responsiveslides.min.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/modernizr-2.6.2.min.js"></script>
<script src="../js/jquery.chocolat.js "></script>
<script src="../js/bootstrap-3.1.1.min.js"></script>

<link rel="stylesheet " href="/css/chocolat.css " type="text/css" media="all" />
 
<script>
	$('.counter').countUp();
</script>
 

<script>
	// You can also use "$(window).load(function() {"
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			manualControls: '#slider3-pager',
		});
	});
</script>

<!-- /nav -->
<!-- requried-jsfiles-for owl -->

<script>
	$(document).ready(function () {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: false,
			autoPlay: true,
			navigation: false,
			navigationText: false,
			pagination: true,
		});
	});
</script>
<!-- //requried-jsfiles-for owl -->


<!--light-box-files -->
<script type="text/javascript ">
	$(function () {
		$('.portfolio-grids a').Chocolat();
	});
</script>
<!-- /js for portfolio lightbox -->
<script>
$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.agileits_w3layouts_banner_nav').addClass('shrink');
        }
        else {
            $('.agileits_w3layouts_banner_nav').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
</script>

<script>
(function($) {
  $.fn.timeline = function() {
    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img"
    };
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" +
        selectors.item
          .first()
          .find(selectors.img)
          .attr("src") +
        ")"
    );
    var itemLength = selectors.item.length;
    $(window).scroll(function() {
      var max, min;
      var pos = $(this).scrollTop();
      selectors.item.each(function(i) {
        min = $(this).offset().top;
        max = $(this).height() + $(this).offset().top;
        var that = $(this);
        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
          selectors.item.removeClass(selectors.activeClass);
          selectors.id.css(
            "background-image",
            "url(" +
              selectors.item
                .last()
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.last().addClass(selectors.activeClass);
        } else if (pos <= max - 40 && pos >= min) {
          selectors.id.css(
            "background-image",
            "url(" +
              $(this)
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          $(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

$("#timeline-1").timeline();

</script>


<script>
$(".links li").click(function(){
    var indexli = $(this).index();
    console.log(indexli);
    document.location.href = '/sinobectrading/fr/products.php';
    // $(".resp-tab-list li").removeClass("resp-tabs-active");
    // $(".resp-tabs-list li:nth-child(indexli)").addclass("resp-tabs-active");
});
</script>