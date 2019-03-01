<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Eos Catering</title>
  <meta charset="utf-8">
  <meta name="description" content="Professional website of the EOS catering">
  <meta name="keywords" content="EOS catering Wrocław">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/main.css" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="hamburger__menu">
        <span class="hamburger__menu--element"></span>
        <span class="hamburger__menu--element"></span>
        <span class="hamburger__menu--element"></span>
      </div>
      <div class="header__logo">
        <img src="images/headerlogo.svg" alt="eos catering logo" class="header__logo--element" />
      </div>
      <div class="seemenu">
        <a href="#" class="button button_green">ZOBACZ MENU</a>
      </div>
    </div>
    <div class="header__round">

    </div>
<div class="arrow">
  <img src="images/arrow.png" alt="arrow" class="arrow">
</div>

  </header>
  <section class="hero">
    <div class="container">
      <div class="hero__flex">



        <p class="hero__offer">Wybierz ofertę</p>
        <p class="hero__offer"> dla siebie:</p>
        <a href="offer.html" class="button button_green hero__button">Klient indywidualny</a>
        <a href="offer.html" class="button button_blue hero__button">Mała, średnia i duża firma</a>
      </div>
    </div>
  </section>
  <section class="about_us">
    <div class="container">


      <h2 class="about_us__heading">Kilka słów<br>o nas</h2>
      <p class="about_us__text">
        Eos Catering to rodzinna firma spod Wrocławia. Gotujemy domowo, smacznie,
        zaspokoimy każde podniebienie. Nasi kucharze posiadają 20-letnie doświadczenie w gastronomii.
      </p>
      <p class="about_us__text">
        Specjalizujemy się w każdym rodzaju cateringu. Możemy Państwu przygotować potrawy zarówno
        z polskiej tradycyjnej kuchni, jak i z innej, wybranej przez państwa kuchni.
      </p>
      <p class="about_us__text">
        Zajmujemy się obsługą wszelkiego rodzaju spotkań rodzinnych, imprez okolicznościowych, bankietów oraz eventów firmowych. Gwarantujemy, że Państwa przyjęcie będzie doskonale</br> zorganizowane,</br>
        a Państwa oczekiwania w pełni zaspokojone.</p>
      </p>
      <p class="about_us__text">Prosimy się nie wahać i już dziś się z nami skontaktować!</p>
    </div>
    <div class="about_us__round"></div>
  </section>

  <section class="contact">
    <div class="container">

      <h2 class="contact__heading">
        Skontaktuj się </br> z nami już teraz!
      </h2>
      <p class="contact__text">
        Jeżeli masz jakieś pytania, bądź
        wachasz się czy skorzystać z jakieś oferty - śmiało, napisz do nas lub zadźwoń, a pomożemy dopasować ofertę indywidualnie do Twoich potrzeb.
      </p>

      <form class="contact__form" action="index.html" method="post">
        <label for="name"><input type="text" name="name" placeholder="Imię i nazwisko (nazwa firmy)" class="contact__form--input"></label>
        <label for="email"><input type="email" name="email" placeholder="E-mail" class="contact__form--input"></label>
        <label for="phone"><input type="text" name="phone" placeholder="Numer telefonu" class="contact__form--input"></label>
        <label for="location"><input type="text" name="location" placeholder="Lokalizacja" class="contact__form--input"></label>
        <textarea name="message" rows="8" cols="80" placeholder="Wiadomość" class="contact__form--textarea"></textarea>
        <input type="submit" name="submit" class="contact__form--button" value="Wyślij">
      </form>

    </div>
    <div class="contact__round">

    </div>
  </section>
  <footer class="footer">

    <div class="container">

      <section class="footer__up">
        <h3 class="footer__up--heading">EOS Catering</h3>
        <p class="footer__up--text1">
          E-mail:
        </p>
        <p class="footer__up--text2">
          biuro@eoscatering.pl
        </p>

        <p class="footer__up--text1">
          Telefon:
        </p>
        <p class="footer__up--text2">
          +48 513 961 825 / +48 518 949 175
        </p>

        <p class="footer__up--text1">
          REGON:
        </p>
        <p class="footer__up--text2">
          360549951
        </p>

        <p class="footer__up--text1">
          NIP:
        </p>
        <p class="footer__up--text2">
          8822102073
        </p>


        <!--<img src="images/eoslogowhite.svg" alt="Eos Logo White" class="footer__logo" />-->
      </section>
      <section class="footer__down">
        <h3 class="footer__down--heading">Odwiedź nas na:</h3>
        <div class="social_media">
          <a href="#" class="facebook"><img src="images/facebook.png" alt="facebook"></a>
          <a href="#" class="twitter"><img src="images/twitter.png" alt="twitter"></a>
        </div>
        <hr class="footer__down--line">
        <img src="images/DESIGN BY MAKOWSKI LOGO.svg" alt="Design by Makowski" class="makowski__logo" />
        <hr class="footer__down--line">
        <p class="footer__down--text1">
          Copyright &copy; 2019
          <p class="footer__down--text2">
            EOS Catering
          </p>
        </p>
      </section>

    </div>
  </footer>
</body>

</html>
