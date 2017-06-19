//Script to modify the height of the sldier

document.addEventListener('DOMContentLoaded', function() {
	var slider = document.querySelector('#block-views-block-slick-carousel-block-1 > div > div > div > div > div');
	slider.style.removeProperty('height');
	slider.style.setProperty('height', '500.385px');
});
