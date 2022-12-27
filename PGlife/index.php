<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Hostel Days</title>

    <?php
    include "includes/head_links.php";
    ?>

    <link rel="stylesheet" href="css/common.css"  />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/home2.css" />


    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap"
    />

</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Let's find a Cozy Accomodation for you!</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!--Our vision section-->
    <div class="desktop-1">
      <div class="frame-div" id="Rectangle-16">
        <div class="our-vision-div">Our Vision</div>
        <div class="our-vision-and-motto-are-simpl">
          <p class="our-vision-and">
            Our vision and motto are simple and singular. To provide the guests
            with a dorm room that feels like home best fitting their needs and
            the homeowners a guest who fits right in. To attain this we work
            with homeowners and guests to give everyone involved the best
            possible experience.
          </p>
          <p class="blank-line-p">&nbsp;</p>
        </div>
      </div>


      <div class="threeRec">
      <div class="rectangle-div4" id="Rectangle-18"></div>
      <div class="rectangle-div5"></div>
      <img
        class="sportsclubimg-1-icon"
        alt=""
        src="img/BookClubImg.jpeg"
      /><b class="sports-club">Books Club</b>
      <div class="join-the-sports-club-play-exc">
      This book community is for who loves to read a wide range of book and have many interactive discussions!
      </div>
      <div class="rectangle-div6" id="Rectangle-20"></div>
      <div class="rectangle-div7"></div>
      <img
        class="sportsclubimg-2-icon"
        alt=""
        src="img/GymClubImg.jpeg"
      /><b class="sports-club1">Gym Club</b>
      <div class="join-the-sports-club-play-exc1">
        If dumbles are your best friend, so this community is for you!
      </div>
      <div class="rectangle-div8" id="Rectangle-22"></div>
      <div class="rectangle-div9"></div>
      <img
        class="sportsclubimg-3-icon"
        alt=""
        src="img/SportsClubImg.jpeg"
      /><b class="sports-club2">Sports Club</b>
      <div class="join-the-sports-club-play-exc2">
        Join the sports club, play exciting games and meet like minded people!
      </div>
      <img
        class="team-goals-pana-1"
        alt=""
        src="img/teampic.png"
      />
    </div>
</div>



    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>

        <div class="row">
            <div class="city-card-container col-sm">
                <a href="property_list.php?city=kota">
                    <div class="city-card rounded-circle">
                        <img src="img/kota.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-sm">
                <a href="property_list.php?city=Pune">
                    <div class="city-card rounded-circle">
                        <img src="img/Pune.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-sm">
                <a href="property_list.php?city=Indore">
                    <div class="city-card rounded-circle">
                        <img src="img/Indore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-sm">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-sm">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-sm">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-sm">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--brand partnership-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div style="margin-top:10px;" class="carousel-item active">
            <img class="d-block w-100" src="img/Carousal.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/Carousal1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/Carousal.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    

        

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
