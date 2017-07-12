
/**
 * 
 */
/** Toggle between adding and removing the "responsive" class to topnav when the user click on the icon  */
function myFunction() {
	var x = document.getElementsById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
       }
/** for slideshow */
var index = 1;
function plusIndex(n) {
	index = index + 1;
	showImage(index);
}
showImage(1);

function showImage(n){
	var i;
	var x = document.getElementsByClassName("slides");
	if(n > x.length){ index = 1};
	if(n < 1){ index = x.length};
	for(i=0;i<x.length;i++)
		{
		x[i].style.display = "none";
		}
	x[index-1].style.display = "block";
		}

autoSlide();
function autoSlide(){
	 var i;
	 var x = document.getElementsByClassName("slides");
	 for (i=0;i<x.length;i++){
	 x[i].style.display = "none";}
	 if(index > x.length){ index = 1};
 x[index-1].style.display = "block";
 index++;
setTimeout(autoSlide,2000);
}

/** timing */
var myvar = SetInterval(myTimer, 1000);
function myTimer() {
	var d = new Date();
	document.getElementById("demo").innerHTML = d.toLocalTimeString();
}
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
   
    