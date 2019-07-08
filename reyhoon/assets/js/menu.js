window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("stick");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function toggle_visibility() {
       var e = document.getElementById('changebutton');
	   var f = document.getElementById('aftershop');
       if(e.style.display === 'inline-block')
	   {e.style.display = 'none';
	   f.style.display = 'inline-block';}
       else
	   {e.style.display = 'inline-block';
	   f.style.display = 'none';}
    }