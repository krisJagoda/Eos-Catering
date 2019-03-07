<section class="contact" id="form">
  <div class="container">

    <h2 class="contact__heading">
      Skontaktuj się </br> z nami już teraz!
    </h2>
    <p class="contact__text">
      Jeżeli masz jakieś pytania, bądź
      wachasz się czy skorzystać z jakieś oferty - śmiało, napisz do nas lub zadźwoń, a pomożemy dopasować ofertę indywidualnie do Twoich potrzeb.
    </p>

    <form class="contact__form" action="form/form.php" method="post">
      <label for="name"><input type="text" name="name" placeholder="Imię i nazwisko (nazwa firmy)"
        class="contact__form--input" required oninvalid="setCustomValidity('Podaj poprawne swoje dane!')"    onchange="try{setCustomValidity('')}catch(e){}"></label>
      <label for="email"><input type="email" name="email" placeholder="E-mail"
        class="contact__form--input" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Podaj poprawny adres e-mail!')"    onchange="try{setCustomValidity('')}catch(e){}"></label>
      <label for="phone"><input type="tel" name="phone" placeholder="Numer telefonu"
        class="contact__form--input" required pattern="\+?\*?[\s\d\-]+" oninvalid="setCustomValidity('Podaj poprawny numer telefonu!')"    onchange="try{setCustomValidity('')}catch(e){}"></label>
      <label for="location"><input type="text" name="location" placeholder="Lokalizacja"
        class="contact__form--input" required oninvalid="setCustomValidity('Podaj lokalizację!')"    onchange="try{setCustomValidity('')}catch(e){}"></label>
      <textarea name="message" rows="8" cols="80" placeholder="Wiadomość"
      class="contact__form--textarea" required oninvalid="setCustomValidity('Napisz wiadomość!')"    onchange="try{setCustomValidity('')}catch(e){}"></textarea>
      <input type="submit" name="submit" class="contact__form--button" value="Wyślij">
    </form>

  </div>

</section>
