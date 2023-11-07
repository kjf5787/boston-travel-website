var rotated = false;
window.addEventListener("resize", function() {
	var width = window.innerWidth
	if(width > 750){
		displayMenu();
		document.getElementsByTagName("nav")[0].style.height = "auto";
	}
	else if(width <= 750){
		hideMenu();
		rotated = true;
		transformHamburger();
	}
});

function displayMenu(){
	document.getElementsByClassName("dropdown")[0].style.display = "block";
	document.getElementsByTagName("nav")[0].style.height = "100vh";
}

function hideMenu(){
	document.getElementsByClassName("dropdown")[0].style.display = "none";
	document.getElementsByTagName("nav")[0].style.height = "auto";
}

function transformHamburger(){
	var bar1 = document.getElementById("bar1");
	var bar2 = document.getElementById("bar2");
	var bar3 = document.getElementById("bar3");
	
	if(rotated){
		bar1.style.transform = "rotate(0deg)";
		bar2.style.opacity = "1";
		bar3.style.transform = "rotate(0deg)";
		rotated = false;
		hideMenu();
	}
	else{
		bar1.style.transform = "translate(0, 11px) rotate(-45deg)";
		bar2.style.opacity = "0";
		bar3.style.transform = "translate(0, -11px) rotate(45deg)";
		rotated = true;
		displayMenu();
	}
}