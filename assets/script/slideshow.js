var currIndex = 0;
var titleArr = ["Boston Burger Company", "Regina Pizzeria", "Mike's Pastry", "Museum of Fine Arts", "Museum of Science", "New England Aquarium", "Duck Tours", "Newbury Street", "Boston Common"];
var imgLinksArr = ["burger", "regina", "mikes", "art", "science", "aquarium", "duck", "newbury", "common"];
var pageLinksArr = ["./meals/bostonBurger.php", "./meals/reginaPizzeria.php", "./meals/mikesPastry.php", "./exhibits/artMuseum.php", "./exhibits/scienceMuseum.php", "./exhibits/aquarium.php", "./adventures/duckTours.php", "./adventures/newbury.php", "./adventures/bostonCommon.php"];
var loadedImgs = new Array();
var numImgs = titleArr.length;

function preloadImgs(){
	for(i = 0; i < imgLinksArr.length; i++){
		loadedImgs[i] = new Image();
		loadedImgs[i].src = buildImgLink(i);
	}
}

// img links = ./assets/images/imgLinksArr[x]Slide.jpeg
function buildImgLink(index){
	start = "./assets/images/";
	end = "Slide.jpeg";
	link = start + imgLinksArr[index] + end;
	return link;
}

function nextSlide(){
	// set index
	currIndex += 1;
	if(currIndex >= numImgs){
		currIndex = 0;
	}

	// disapear current slide 
	document.getElementById("slideTitle").style.opacity = 0;
	document.getElementById("slideImg").style.opacity = 0;

	// switch to next slide items
	document.getElementById("slideTitle").innerText = titleArr[currIndex];
	document.getElementById("slideImg").src = loadedImgs[currIndex].src;
	document.getElementById("slideLink").href = pageLinksArr[currIndex];

	// fade slide in 
	fadeIn("slideTitle");
	fadeIn("slideImg");
}

function prevSlide(){
	// set index
	currIndex -= 1;
	if(currIndex < 0){
		currIndex = numImgs - 1;
	}

	// disapear current slide 
	document.getElementById("slideTitle").style.opacity = 0;
	document.getElementById("slideImg").style.opacity = 0;

	// switch to previous slide items
	document.getElementById("slideTitle").innerText = titleArr[currIndex];
	document.getElementById("slideImg").src = buildImgLink(currIndex);
	document.getElementById("slideLink").href = pageLinksArr[currIndex];

	// fade slide in 
	fadeIn("slideTitle");
	fadeIn("slideImg");
}

// fades element in 
function fadeIn(id){
	element = document.getElementById(id);
	if(parseFloat(element.style.opacity) < 1){
		element.style.opacity = parseFloat(element.style.opacity) + .01;
		setTimeout(function() {
            fadeIn(id);
        }, 5);
	}
}