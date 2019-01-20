var url = location.href.split("/");
var navLinks = document.getElementsByClassName("navbar")[0].getElementsByTagName("a");
var i=0;
var currentPage = url[url.length - 1];

for(i;i<navLinks.length;i++){
 	var thisLink = navLinks[i].href.split("/");
 	if(thisLink[thisLink.length-1] == currentPage) {
 	navLinks[i].className = "current";
	}

}
