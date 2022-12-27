<?php
session_start();
?>


<!DOCTYPE html>
<html>


  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>

    <style>
    :root {
    /* fonts */
    --font-inter: Inter;
  
    /* font sizes */
    --font-size-base: 28px;
    --font-size-lg: 50px;
    --font-size-xl: 82px;
  
    /* Colors */
    --color-white: #fff;
    --color-black: #000;
    --color-violet-100: #c17ee6;
    --color-violet-200: rgba(193, 126, 230, 0.45);
    --color-violet-300: rgba(193, 126, 230, 0.15);
    --color-gold-100: #ffdd00;
    --color-gold-200: #f2d204;
    --color-gray: #d9d9d9;
  }
    
    
    
    body {
    margin: 0;
    line-height: normal;
  }
  .rectangle-div,
  .rectangle-div1,
  .rectangle-div2 {
    position: absolute;
    top: 1666px;
    left: 0;
    background-color: var(--color-violet-200);
    width: 1440px;
    height: 637px;
  }
  .rectangle-div1,
  .rectangle-div2 {
    top: 368px;
    width: 1434px;
    height: 308px;
  }
  .rectangle-div2 {
    top: 806px;
    left: 627px;
    background-color: var(--color-violet-300);
    width: 850px;
    height: 590px;
  }
  .house-searching-cuate-1 {
    position: absolute;
    top: 136px;
    left: 832px;
    width: 602px;
    height: 602px;
    object-fit: cover;
  }
  .homeabout-us-div {
    position: absolute;
    top: 522px;
    left: 159px;
    font-size: 17px;
    letter-spacing: 0.09em;
    line-height: 20px;
    text-align: left;
    display: inline-block;
    width: 216px;
  }
  .what-we {
    margin-block-start: 0;
    margin-block-end: 0;
    margin: -114px 65px 0px -131px;
    font-size: 30px;
  }
  .do-p {
    margin: 0;
    font-size: 45px;
  }
  .what-we-do-container {
    line-break: anywhere;
    width: 100%;
  }
  .about-us,
  .what-we-do {
    position: absolute;
    color: var(--color-gold-100);
    text-align: left;
  }
  .what-we-do {
    top: 563px;
    left: 150px;
    font-size: var(--font-size-xl);
    letter-spacing: 0.09em;
    line-height: 78px;
    display: flex;
    align-items: center;
    width: 435px;
    height: 246px;
  }
  .about-us {
    top: 839px;
    left: 720px;
    font-size: var(--font-size-lg);
    letter-spacing: -0.01em;
    line-height: 57px;
    display: inline-block;
  }
  .rectangle-div3 {
    position: absolute;
    top: 1816px;
    left: 71px;
    background-color: var(--color-gold-200);
    width: 311px;
    height: 402px;
  }
  .blah-blah-blah-blah-blah-blah {
    position: absolute;
    top: 935px;
    left: 786px;
    font-size: 32px;
    letter-spacing: -0.01em;
    line-height: 46px;
    font-weight: 500;
    white-space: pre-wrap;
    text-align: left;
    display: inline-block;
  }
  .hostel-days-website-favicon-wh {
    position: absolute;
    top: 933.06px;
    left: 1213.52px;
    width: 345.31px;
    height: 396.16px;
    object-fit: cover;
    z-index: -1;
  }
  .meet-the-team {
    position: absolute;
    top: 1894px;
    left: 95px;
    font-size: var(--font-size-xl);
    letter-spacing: 0.09em;
    line-height: 77px;
    display: flex;
    color: var(--color-white);
    white-space: pre-wrap;
    align-items: center;
    width: 264px;
    height: 246px;
  }
  .designers,
  .developers-i {
    top: 1607px;
    font-size: var(--font-size-lg);
    letter-spacing: -0.04em;
    line-height: 33px;
    font-weight: 600;
  }
  .developers-i {
    position: absolute;
    left: 554px;
    display: inline-block;
    color: var(--color-violet-100);
  }
  .designers {
    left: 849px;
    color: var(--color-violet-300);
  }
  .contributers,
  .designers,
  .prafulla-parsai-div {
    position: absolute;
    display: inline-block;
  }
  .contributers {
    top: 1607px;
    left: 1115px;
    font-size: var(--font-size-lg);
    letter-spacing: -0.04em;
    line-height: 33px;
    font-weight: 600;
    color: var(--color-violet-300);
  }
  .prafulla-parsai-div {
    top: 2070px;
    left: 506px;
    line-height: 50px;
    font-weight: 500;
  }
  .cs-ctis-div,
  .cs-ctis-div1,
  .cs-ctis-div2,
  .prakhar-kabra-div,
  .tanishqa-porwal-div {
    position: absolute;
    top: 2136px;
    left: 544px;
    line-height: 50px;
    font-weight: 500;
    display: inline-block;
  }
  .cs-ctis-div1,
  .cs-ctis-div2,
  .prakhar-kabra-div,
  .tanishqa-porwal-div {
    left: 852px;
  }
  .cs-ctis-div2,
  .prakhar-kabra-div,
  .tanishqa-porwal-div {
    left: 1170px;
  }
  .prakhar-kabra-div,
  .tanishqa-porwal-div {
    top: 2070px;
    left: 813px;
  }
  .tanishqa-porwal-div {
    left: 1118px;
  }
  .mask-group-icon {
    position: absolute;
    top: 1828px;
    left: 500px;
    width: 221px;
    height: 230px;
    object-fit: cover;
  }
  .apartment-rent-pana-2-1,
  .mask-group-icon1,
  .mask-group-icon2 {
    position: absolute;
    top: 1828px;
    left: 808px;
    width: 224px;
    height: 230px;
    object-fit: cover;
  }
  .apartment-rent-pana-2-1,
  .mask-group-icon2 {
    left: 1116px;
  }
  .apartment-rent-pana-2-1 {
    top: 839px;
    left: 71px;
    width: 624px;
    height: 624px;
  }
  .desktop-2 {
    position: relative;
    background-color: var(--color-white);
    width: 100%;
    height: 2452px;
    overflow: hidden;
    text-align: center;
    font-size: var(--font-size-base);
    color: var(--color-black);
    font-family: var(--font-inter);
  }
  </style>
    <link rel="stylesheet" href="css/AboutUs2.css" />
    <link rel="stylesheet" href="css/AboutUs1.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;1,600&display=swap"
    />
  </head>



  <body>
  <?php
    include "includes\header.php";
    ?>


    <div class="desktop-2">
      <div class="rectangle-div"></div>
      <div class="rectangle-div1"></div>
      <div class="rectangle-div2"></div>
      <img
        class="house-searching-cuate-1"
        alt=""
        src="img/searching.png"
      />
      <div class="homeabout-us-div">Home/About Us</div>
      <b class="what-we-do"
        ><span class="what-we-do-container"
          ><p class="what-we">What We</p>
          <p class="do-p">Do?</p></span
        ></b
      ><b class="about-us">About Us</b>
      <div class="rectangle-div3"></div>
      <div class="blah-blah-blah-blah-blah-blah">
        <p class="what-we">Hostel Days is a website for finding dorms, shared flat with specific requirements of location etc. We help property owners who are willing to open their homes for guests. We make sure that only verified guests and hosts are enlisted on our website by careful filtering so that both the parties are at benefit and the safety of all involved personnel is ensured.</p>
      </div>
      <img
        class="hostel-days-website-favicon-wh"
        alt=""
        src="img/white-logo.png"
      /><b class="meet-the-team"
        ><span class="what-we-do-container" >
          <p class="do-p">Meet the Team</p></span
        ></b
      ><i class="developers-i">#developers</i><i class="designers">#designers</i
      ><i class="contributers">#contributers</i>
      <div class="prafulla-parsai-div">Prafulla Parsai</div>
      <div class="cs-ctis-div">CS-CTIS</div>
      <div class="cs-ctis-div1">CS-CTIS</div>
      <div class="cs-ctis-div2">CS-CTIS</div>
      <div class="prakhar-kabra-div">Tanishqa Porwal</div>
      <div class="tanishqa-porwal-div">Prakhar Kabra</div>
      <img class="mask-group-icon" alt="" src="img/Prafulla.jpeg" /><img
        class="mask-group-icon1"
        alt=""
        src="img/tanishqa.jpeg"
      /><img
        class="mask-group-icon2"
        alt=""
        src="img/prakhar.jpeg"
      /><img
        class="apartment-rent-pana-2-1"
        alt=""
        src="img/apartment.png"
      />
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

  </body>
</html>
