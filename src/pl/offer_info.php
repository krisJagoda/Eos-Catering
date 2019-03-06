<?php include ("head.php") ?>


<body>
  <?php
  include ("header_offer.php")
  ?>
  <section class="offer_info">
    <div class="container">

      <a href="offer.php" class="offer_info__button">
        WRÓĆ DO INNYCH OFERT
      </a>
  <?php
    $current = $_GET['current'];

    if ($current === 'business') {
      include ('offer/offer_business.php');
    } else if ($current === 'canapes') {
      include ('offer/offer_canapes.php');
    } else if ($current === 'lunch') {
      include ('offer/offer_lunch.php');
    } else if ($current === 'dinner') {
      include ('offer/offer_dinner.php');
    } else if ($current === 'party') {
      include ('offer/offer_party.php');
    } else if ($current === 'family') {
      include ('offer/offer_family.php');
    }



   ?>


    </div>

  </section>


  <?php
  include ("footer.php")
  ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../js/app.js">

  </script>

</body>
