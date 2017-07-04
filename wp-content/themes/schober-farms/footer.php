
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8">
				<span class="">Since 1988, our family farm has produced grain-fed, quality pork.</span>
				<span class="lead">“If you can light a fire, you can roast a pig!”</span>
				<span>Our Farm is certified under the Canadian Quality Assurance Program (CQA).</span>
			</div>
			<div class="col-12 col-md-4">
				<span class="phone">Call 705-322-PIGS (7447)</span>
				<a href="<?php echo get_site_url(); ?>/contact-us/" class="btn btn-primary">GET DIRECTIONS</a>
				<span>4145 Crossland Road<br/>
				Tiny, Ontario L0L 1P1</span>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>


<script>
	
	var windoww = jQuery(window).width();
	if(windoww < 767){
        var phonenum = jQuery('.phonenumber').html();
        jQuery('.phonenumber').html('<a onclick="__gaTracker(\'send\', \'event\', \'phoneNumber\', \'clickToCall\');" href="tel:'+phonenum+'" title="callUsToday">'+phonenum+'</a>');
    }

</script>

</body>
</html>