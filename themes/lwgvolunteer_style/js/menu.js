/*document.addEventListener("DOMContentLoaded", function() {
	var menus = document.getElementsByClassName('region-primary-menu');
	var menu = menus[0];
	var mediaQuery = window.matchMedia("(min-width:1205px) and (max-width:1330px)"); 
	menu.style.position = 'relative';
	if (mediaQuery.matches) {
		menu.style.bottom = '36px';
	}
});
*/

document.addEventListener("resize", function(){
	var mediaQuery = window.matchMedia( "(min-width: 893px) and (max-width: 1204px)" );
	var menus = document.getElementsByClassName('region-primary-menu');
	var menu = menus[0];
	menu.style.position = 'relative';
	if (mediaQuery.matches) {
		menu.style.bottom = '36px';
	}
});

document.addEventListener("resize", function(){
	var mediaQuery = window.matchMedia("(min-width:1209px) and (max-width:1330px)");
	var menu = document.getElementById("block-horizontalmenu-3");
	if (mediaQuery.matches) {
		menu.style.bottom = '40px';
	}
});

document.addEventListener("DOMContentLoaded", function() {
	console.log(checkIfMainPage(window.location.pathname));
	if (checkIfMainPage(window.location.pathname) == false){
		if (window.matchMedia("(min-width:1205px)").matches){
			var menu = document.getElementById('block-horizontalmenu-3');
			menu.style.bottom = '170px';	
		}
	} 
});

function checkIfMainPage(path) {
	var retFlag = false;
        var pages = ["/", "/volunteer-services", "/scheduling", "/enrichment"];
        for (i = 0; i < pages.length; i++) {
                if (pages[i] == path) {
                        retFlag = true;
                        return retFlag
                } else {
                	retFlag = false;
                }
        }
        return retFlag;
}
