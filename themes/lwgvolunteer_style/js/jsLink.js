//Longwood Chimes

jQuery(function () {
	jQuery('#block-longwoodchimes > h2').click(function() {
		window.open("https://longwoodgardens.org/membership/members-only/longwood-chimes", '_blank');
	});

});


jQuery(function (){
	jQuery('#block-longwoodchimes > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, 
		function() {
			jQuery(this).css('color', '#0c2d82');
		}
	);
});

//In the Gardens Today
jQuery(function () {
	jQuery('#block-inthegardenstoday > h2').click(function() {
		window.open("https://longwoodgardens.org/events-and-performances/calendar", '_blank');
	});
});

jQuery(function () {
	jQuery('#block-inthegardenstoday > h2').hover(
		function() {
			jQuery(this).css('color', '#e10098');
		}, 
		function() {
			jQuery(this).css('color', '#0c2d82');
		}
	);
});
