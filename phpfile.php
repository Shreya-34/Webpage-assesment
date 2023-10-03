<!DOCTYPE html>
<html>
  <head>
    <title>Testing HTML</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="styling.css" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand marright" href="#">
          <img src="https://i.pinimg.com/564x/9c/62/16/9c6216916c3d79e3a65c1fcd8a8ededb.jpg" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" id="navItem1" href="#wcuSection">Home<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#deliveryPaymentSection" id="navItem2">About</a>
            <a class="nav-link" href="#followUsSection" id="navItem3">Floor plans</a>
            <a class="nav-link" href="#exploreMenuSection" id="navItem4">Amenities</a>
            <a class="nav-link" href="#deliveryPaymentSection" id="navItem5">Gallery</a>
            <a class="nav-link" href="#followUsSection" id="navItem6">Specifications</a>
            <a class="nav-link" href="#exploreMenuSection" id="navItem7">Projects</a>
            <a class="nav-link" href="#deliveryPaymentSection" id="navItem8">Contact</a>
            <a class="navbar-brand marleft" href="#">
              <img src="https://i.pinimg.com/564x/c8/b1/a4/c8b1a465de22d3708ce60e4d664e0b4e.jpg" alt="Logo" />
            </a>
          </div>
        </div>
      </div>
    </nav>
<!-- for background image we created id for js -->
    <div id="firstpagebgimg">
      <div class="contentwidth">
      <h1 class="firstpageheading"><span class="text-size">ONE OF THE SOUTH INDIA'S HIGHEST</span> Skyscrapers</h1>
      </div>
      <div class="bottomsectionbg">
      <div class="bottomsection"></div>
      <div class="circles-alignment">
        <div class="shaded-circle1">
          <h1 class="nums">5.5</h1>
          <p class="num-content">PROJECT AREA</p>
        </div>

        <div class="shaded-circle2">
          <h1 class="nums">5</h1>
          <p class="num-content">TOWERS WITH PARKING</p>
        </div>

        <div class="shaded-circle3">
          <h1 class="nums">5</h1>
          <p class="num-content">UNIT/FLOOR</p>
        </div>

        <div class="shaded-circle4">
          <h1 class="nums">62000</h1>
          <p class="num-content">SQUARE FEET LAVISH CLUBHOUSE</p>
        </div>

        <div class="shaded-circle">
          <h1 class="nums">10.1'</h1>
          <p class="num-content">CEILING HEIGHT PER EACH FLAT</p>
        </div>
        <div class="icons">
    <i class="fab fa-whatsapp icon-color">+91 7997555555</i>
    <i class="fas fa-envelope icon-color">enquiry@candeurcrescent.com</i>
    <i class="fas fa-map-marker-alt icon-color">245,SN.o.104 & 106, Next to sancta</i>
    </div>
    </div>
      </div>
    </div>
    <!-- second section/secondpage -->
    <div class="seondpagecontainer" id="secondpage">
        <div class="secpagecards1"><h1 class="styled-font">LEAP INTO THE SKY WITH CRESCENT</h1></div>
        <div class="secpagecards2">
          <h1 class="secheading"><span class="headingpart">WELCOME TO</span> CRESCENT</h1>
          <p class="content">Situated in the heart of serlingampally,Hyderabad,Candeur Crescent, is the embodimet of luxury and a refined lifestyle for the residents.</p>
        <p class="content">To establish a new standard for highrise apartments,Candeur Crescent, is designed to change the city sky line of Hyderabad</p>
        <p class="boldcontent">RERA NO:P02500004515</p>
        <div class="rera-buttonele">
        <button class="btn-ele">Enquire Now</button>
        </div>
      </div>

        <div class="secpagecards3">
          <img src="https://i.pinimg.com/564x/9a/30/10/9a301018d7f21b6a40a58f1b9bb0f6aa.jpg" class="secpageimg">
        </div>
      </div>

      <div id="thirdpagecontainer">
        <div>
        <div class="shaded-circle-logo">
          <h1 class="logo-content">CANDUER CRESCENT PLANS</h1>
          <div class="planbtn">
          <button class="mbtn" id="navigateToMasterplan" onclick="navigateToPHPPage()">Master Plan</button>

            <button class="tbtn">Tower Plan</button>
          </div>
        </div>
        </div>

        <div class="floorplans">
          <div class="indivplan"><p>Tower A</p><img src="https://i.pinimg.com/564x/b2/db/33/b2db33d1cc855154f1333483df1bb9be.jpg" class="planimg"></div>
          <div class="floorplans">
          <div class="indivplan"><p>Tower B</p><img src="https://i.pinimg.com/564x/b2/db/33/b2db33d1cc855154f1333483df1bb9be.jpg" class="planimg"></div>
        </div>
        <div class="floorplans">
          <div class="indivplan"><p>Tower C</p><img src="https://i.pinimg.com/564x/b2/db/33/b2db33d1cc855154f1333483df1bb9be.jpg" class="planimg"></div>
        </div>
        <div class="floorplans">
          <div class="indivplan"><p>Tower D</p><img src="https://i.pinimg.com/564x/b2/db/33/b2db33d1cc855154f1333483df1bb9be.jpg" class="planimg"></div>
        </div>
        <div class="floorplans">
          <div class="indivplan"><p>Tower E</p><img src="https://i.pinimg.com/564x/b2/db/33/b2db33d1cc855154f1333483df1bb9be.jpg" class="planimg"></div>
        </div>
        </div>
        
        <div class="thirdpagebtn"><button class="downbtn">Download Broucher</button></div>
      </div>

      <div id="fourthpagecontainer">
        <div>
          <div class="shaded-circle-logo">
            <h1 class="logo-content2">AMENITIES</h1>
          <div class="planbtn2">
            <button class="mbtn2">OUTDOOR AMENITIES</button>
            <button class="tbtn2">CLUBHOUSE AMENITIES</button>
          </div>
        </div>
        </div>

        <div class="fourthcard" id="firstslide">
          <div class="cardstyling">
            <p class="fourthpagecontent">An Amalgamation of <span class="bold-content">luxirious </span>Amenities & Natural Elements </p>
            <button class="fourthpagebtn">Enquiry Now</button>
          </div>
<div class="iconarrangement">
          <div class="pages">
            
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <p class="amenities">ENTRANCE & EXIT PLAZA</p>
          </div>
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <p class="amenities">CYCLING TRACK</p>
          </div>
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <p class="amenities">TROPICAL PLANTATION</p>
          </div>
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <P class="amenities">AMPHITHEATRE</P>
          </div>

          </div>

          <div class="pages">
            
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <p class="amenities">HALF BASKET BALL COURT</p>
          </div>
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <p class="amenities">LAWN</p>
          </div>
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <p class="amenities">WATER BODY</p>
          </div>
          <div class="shaded-circle-icon">
            <h1 class="logo-content2">AMENITIES</h1>
            <P class="amenities">SCULPTURES</P>
          </div>
          
          </div>
        </div>
        
      </div>


    </div>
      
    <script type="text/javascript" src="javascript.js"></script>
  </body>
</html>
