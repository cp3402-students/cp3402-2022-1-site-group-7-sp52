<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Learning_centre
 */

?>

<footer>

<div class="container standard-padding-bottom pt-4">
<?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
</div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
	$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		nav: true,
		margin:30,
		responsive:{
			1200:{
                items:3
            },
            768:{
                items:2
            },
			0:{
                items:1
            }
        }
	});
	});

	$(document).ready(myfunction);
	$(window).on('resize',myfunction);

	function myfunction() {
		var win = $(".pre-card").width();
		$(".inner-wrapper").css("width", win);
	}


</script>

</body>
</html>
