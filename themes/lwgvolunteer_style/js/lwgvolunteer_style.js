
//Function to assign HTML ID to first item in "Operational Guidelines" dropdown menu
function assignInlineStyles () {

 // document.getElementsByClassName("menu sub-nav")[1].getElementsByClassName("menu-item")[0].innerHTML ='<a id="volunteer_dropdown_item_1" href="http://volunteer.longwoodgardens.org/sites/default/files/2016-09/Volunteer%20Manual%208-2016.pdf">Volunteer Manual</a>';

  document.getElementsByClassName("site-branding__logo")[0].innerHTML='<img src="/sites/default/files/LG-Logo-lockup_forweb_1.png" alt="Home" style="height: 120px; width: auto;">';
 
  //document.getElementById("block-views-block-calendar-usage-instructions-sidebar-block-1").style.margin = "@media (min-width: 200px) and (max-width: 900px){margin: -20px auto 60px 0px}; @media (min-width: 901px){margin:-60px 50px 60px 0px}";

}


//Changes the title on the front page to say "Volunteer Portal"
function persistPageTitle () {
  document.getElementsByClassName("js-quickedit-page-title title page-title")[0].innerHTML='Volunteer Portal';
}


//Function to style the main announcement block on front page
function setAnnouncementBlockStyle () {
	document.getElementById("block-views-block-announcement-aggregator-block-1-6").style.margin = "0px 0px 35px 0px";
	document.getElementById("block-views-block-announcement-aggregator-block-1-6").style.padding = "4px 60px 435px 60px";
	document.getElementById("block-views-block-announcement-aggregator-block-1-6").style.background = "white";
	//document.getElementById("block-views-block-announcement-aggregator-block-1").style.padding "4px 60px 435px 60px";
}

function setResourceBlockStyle () {
	document.getElementById("block-views-block-learn-resources-aggregator-block-1").style.background = "white";
	document.getElementById("block-views-block-learn-resources-aggregator-block-1").style.margin = "0px 0px 35px 0px";
	document.getElementById("block-views-block-learn-resources-aggregator-block-1").style.padding = "4px 60px 435px 60px";
}

//setAnnouncementBlockStyle();

function main () {
	
	
	if (window.location == 'http://volunteer.longwoodgardens.org'){
		document.getElementById("block-views-block-quick-links-aggregator-view-block-1-4").id = "block-views-block-quick-links-aggregator-view-block-front";
		document.getElementById("block-views-block-calendar-usage-instructions-sidebar-block-1-4").id = "block-views-block-calendar-usage-instructions-front";

	} else if (window.location == 'http://volunteer.longwoodgardens.org/participate'){
		document.getElementById("block-views-block-quick-links-aggregator-view-block-1-4").id = "block-views-block-quick-links-aggregator-view-block-participate";
		document.getElementById("block-views-block-calendar-usage-instructions-sidebar-block-1-4").id = "block-views-block-calendar-usage-instructions-participate";
		
	} else if (window.location == 'http://volunteer.longwoodgardens.org/learn') {
		document.getElementById("block-views-block-quick-links-aggregator-view-block-1-4").id = "block-views-block-quick-links-aggregator-view-block-learn";
		document.getElementById("block-views-block-calendar-usage-instructions-sidebar-block-1-4").id = "block-views-block-calendar-usage-instructions-learn";

	} else if (window.location == 'http://volunteer.longwoodgardens.org/administrative') {
		document.getElementById("block-views-block-quick-links-aggregator-view-block-1-4").id = "block-views-block-quick-links-aggregator-view-block-administrative";
		document.getElementById("block-views-block-calendar-usage-instructions-sidebar-block-1-4").id = "block-views-block-calendar-usage-instructions-administrative";
	} 
	
	
	assignInlineStyles();
	persistPageTitle();
	//setAnnouncementBlockStyle();
	//setResourceBlockStyle();
}

persistPageTitle();
