document.addEventListener('DOMContentLoaded', function() {
		var flag = document.getElementById('block-views-block-aggregators-block-1');
		if (flag) {
			var title = document.querySelector('#block-pagetitle-2 > div > h1');
			title.innerText = "Welcome to Your Volunteer Hub";
			title.style.right = '379px';
		} else {
			document.querySelector('#block-pagetitle-2 > div > h1').innerText = "Volunteer Hub";
		}
});

