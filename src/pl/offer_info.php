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


</body>
