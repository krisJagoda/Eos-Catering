<?php include ("head.php") ?>

<body>
  <?php
  include ("header_offer.php")
  ?>

  <section class="offer">
    <h2 class="offer__heading">EOS Catering</h2>
    <p class="offer__text">
      Oferujemy szeroki wachlarz usług cateringowych dostosowany do państwa potrzeb i oczekiwań. Do każdego klienta podchodzimy
      indywidualnie, jesteśmy gotowi sprostać największym wyzwaniom. Prosimy zapoznać się z naszą ofertą i skontaktować się z nami już dziś!
    </p>
  </section>

  <section class="business_offer">
    <h3 class="business_offer__heading">Oferta dla firm</h3>
    <a href="offer_info.php?current=business" class="offer__element offer__coffee">
      <div class="offer__inside">
        <div class="offers__text">
          Spotkania biznesowe,<br> przerwy kawowe
        </div>
      </div>
    </a>
    <a href="offer_info.php?current=canapes" class="offer__element offer__canapes">
      <div class="offer__inside">
        <div class="offers__text">
          Kanapki, sałatki <br>oraz finger food
        </div>
      </div>
    </a>

    <a href="offer_info.php?current=lunch" class="offer__element offer__lunch">
      <div class="offer__inside">
        <div class="offers__text ">
          Lunch, szkolenia
        </div>
      </div>
    </a>

    <a href="offer_info.php?current=dinner" class="offer__element offer__dinner">
      <div class="offer__inside">
        <div class="offers__text">
          Obiady <br> abonamentowe
        </div>
      </div>
    </a>
  </section>

  <section class="individual_offer">
    <h3 class="individual_offer__heading">Oferta dla klientów <br> indywidualnych</h3>

    <a href="offer_info.php?current=party" class="offer__element offer__communion">
      <div class="offer__inside">
        <div class="offers__text">
          Przyjęcia okolicznościowe <br> (wesela, komunie itp.)
        </div>
      </div>
    </a>

    <a href="offer_info.php?current=family" class="offer__element offer__family">
      <div class="offer__inside">
        <div class="offers__text">
          Spotkania <br> rodzinne
        </div>
      </div>
    </a>

  </section>

  <?php
  include ("footer.php")
  ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../js/app.js">

  </script>

</body>
