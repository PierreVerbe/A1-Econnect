var url = location.href.split("/");
var navLinks = document.getElementsByClassName("navbar")[0].getElementsByTagName("a");
var i=0;
var currentPage = url[url.length - 1];

for(i;i<navLinks.length;i++){
 	var isLink = navLinks[i].href.split("/");
 	if(isLink[isLink.length-1] == currentPage) {
 	navLinks[i].className = "current";
	}

}
