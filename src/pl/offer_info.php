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
    if ($_GET['current']=== 'business') {
      include ('offer/offer_business.php');
    } else if ($_GET['current']=== 'lunch') {

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
