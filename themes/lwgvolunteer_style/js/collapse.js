jQuery(document).ready(function() {
	jQuery('#block-views-block-quick-links-aggregator-view-block-5 > div').hide();
	jQuery('#block-views-block-quick-links-aggregator-view-block-3 > div').hide();
	jQuery('#block-views-block-quick-links-aggregator-view-block-6 > div').hide();
	jQuery('#block-views-block-quick-links-aggregator-view-block-4 > div').hide();
	jQuery('#block-views-block-aggregators-block-6 > div').hide();
	jQuery('#block-views-block-aggregators-block-5 > div').hide(); 
	jQuery('#block-views-block-quick-links-aggregator-view-block-7 > div').hide(); //Flipbooks
	jQuery('#block-views-block-aggregators-block-4 > div').hide();
	jQuery('#block-views-block-aggregators-block-8 > div').hide();
});

//Onsite Enrichment
jQuery(function () {
	jQuery('#block-views-block-quick-links-aggregator-view-block-6 > h2').click(function() {
		jQuery('#block-views-block-quick-links-aggregator-view-block-6 > div').slideToggle();
	});
});

jQuery(function () {
	jQuery('#block-views-block-quick-links-aggregator-view-block-6 > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, function() {
			jQuery(this).css('color', 'black');
		
		})
});

//Guest Engagement Manuals
jQuery(function () {
	jQuery('#block-views-block-quick-links-aggregator-view-block-4 > h2').click(function() {
		jQuery('#block-views-block-quick-links-aggregator-view-block-4 > div').slideToggle();
	});
});

jQuery(function () {
	jQuery('#block-views-block-quick-links-aggregator-view-block-4 > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, function() {
			jQuery(this).css('color', 'black');	
	});
});

//Volunteer Manual
jQuery(function () {
	jQuery('#block-views-block-aggregators-block-6 > h2').click(function() {
		jQuery('#block-views-block-aggregators-block-6 > div').slideToggle();
	});
});

jQuery(function (){
	jQuery('#block-views-block-aggregators-block-6 > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, function(){
			jQuery(this).css('color', 'black');
		}
	);
});

//Current Opportunities
jQuery(function () {
	jQuery('#block-views-block-quick-links-aggregator-view-block-3 > h2').click(function() {
		jQuery('#block-views-block-quick-links-aggregator-view-block-3 > div').slideToggle();
	});
});

jQuery(function() {
	jQuery('#block-views-block-quick-links-aggregator-view-block-3 > h2').hover(
		function() {
			jQuery(this).css('color', '#ffa300');
		}, function() {
			jQuery(this).css('color', 'black');
		})
});

//Scheduling Calendars
jQuery(function () {
    jQuery('#block-views-block-quick-links-aggregator-view-block-5 > h2').click(function(){
        jQuery('#block-views-block-quick-links-aggregator-view-block-5 > div').slideToggle();
    }); 
});

jQuery(function() {
	jQuery('#block-views-block-quick-links-aggregator-view-block-5 > h2').hover(
		function() {
			jQuery(this).css('color', '#ffa300');
		}, function() {
			jQuery(this).css('color', 'black');
		})
});
//Online Training
jQuery(function () {
	jQuery('#block-views-block-aggregators-block-5 > h2').click(function() {
		jQuery('#block-views-block-aggregators-block-5 > div').slideToggle();
	});
});

jQuery(function() {
	jQuery('#block-views-block-aggregators-block-5 > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, function() {
			jQuery(this).css('color', 'black');
		}
	);
});

//Flipbooks
jQuery(function () {
	jQuery('#block-views-block-quick-links-aggregator-view-block-7 > h2').click(function() {
		jQuery('#block-views-block-quick-links-aggregator-view-block-7 > div').slideToggle();
	});
});

jQuery(function(){
	jQuery('#block-views-block-quick-links-aggregator-view-block-7 > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, function() {
			jQuery(this).css('color', 'black');
		}
	);
});

jQuery(function () {
	jQuery('#block-views-block-aggregators-block-4 > h2').click(function() {
		jQuery('#block-views-block-aggregators-block-4 > div').slideToggle();
	});
});

jQuery(function () {
	jQuery('#block-views-block-aggregators-block-8 > h2').click(function (){
		jQuery('#block-views-block-aggregators-block-8 > div').slideToggle();
	});
});
