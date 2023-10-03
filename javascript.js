var firstpagebgimg = document.getElementById("firstpagebgimg");
firstpagebgimg.style.backgroundImage =
  "url('https://i.pinimg.com/564x/ea/84/ac/ea84ac851fcc98a678cd96510c48497e.jpg')";

var thirdpagecontainer = document.getElementById("thirdpagecontainer");
thirdpagecontainer.style.backgroundImage =
  "url('https://i.pinimg.com/564x/52/07/b3/5207b3ea8552226e292ee6bbb5583577.jpg')";

var fourthpagecontainer = document.getElementById("fourthpagecontainer");
fourthpagecontainer.style.backgroundImage =
  "url('https://i.pinimg.com/564x/ca/c2/2f/cac22fb33f02746a341d751381b261fc.jpg')";

function navigateToPHPPage() {
  window.location.href = "navigatedpage.php";
}

//for homepage
function scrollToFirstPage() {
  var element = document.getElementById("firstpagebgimg");
  element.scrollIntoView({ behavior: "smooth" }); // This will scroll smoothly to the section
}
// click event listener
var homeLink = document.getElementById("navItem1");
homeLink.addEventListener("click", scrollToFirstPage);

//for aboutpage
function scrollToSecondPage() {
  var element = document.getElementById("secondpage");
  element.scrollIntoView({ behavior: "smooth" }); // This will scroll smoothly to the section
}

var aboutLink = document.getElementById("navItem2");
aboutLink.addEventListener("click", scrollToSecondPage);

//for floorplans
function scrollToThirdPage() {
  var element = document.getElementById("thirdpagecontainer");
  element.scrollIntoView({ behavior: "smooth" });
}

var fplanLink = document.getElementById("navItem3");
fplanLink.addEventListener("click", scrollToThirdPage);

//for amenities
function scrollToFourthPage() {
  var element = document.getElementById("fourthpagecontainer");
  element.scrollIntoView({ behavior: "smooth" });
}

var fplanLink = document.getElementById("navItem4");
fplanLink.addEventListener("click", scrollToFourthPage);

//for forward and backward arrows on clicking the fontarrows
function display(slideId) {
  // Get references to the first and second slides
  const firstSlide = document.getElementById("firstslide");
  const secondSlide = document.getElementById("secondslide");

  // Check which slide to display and which one to hide
  if (slideId === "firstslide") {
    firstSlide.style.display = "block";
    secondSlide.style.display = "none";
  } else if (slideId === "secondslide") {
    firstSlide.style.display = "none";
    secondSlide.style.display = "block";
  }
}
//redirecting to the main page on clicking home
function redirectToHomePage() {
  window.location.href = "phpfile.php"; // Replace 'home.html' with the actual URL of your home page
}
