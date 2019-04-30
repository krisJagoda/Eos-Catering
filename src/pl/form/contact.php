<section class="contact" id="form">

  <div class="container">

    <h2 class="contact__heading">
      Skontaktuj się </br> z nami już teraz!
    </h2>
    <p class="contact__text">
      Jeżeli masz jakieś pytania, napisz do nas lub zadźwoń, <br class="contact__text--br">a pomożemy dopasować ofertę indywidualnie do Twoich potrzeb.
    </p>

    <form class="contact__form" action="form/form.php" method="post">
      <fieldset class="row">
        <div class="col-md-6">
          <label for="name"><input type="text" name="name" placeholder="Imię i nazwisko (nazwa firmy)"
          class="contact__form--input" required oninvalid="setCustomValidity('Podaj poprawne swoje dane!')"
          onchange="try{setCustomValidity('')}catch(e){}"></label>
        </div>
        <div class="col-md-6">
        <label for="email"><input type="email" name="email" placeholder="E-mail"
          class="contact__form--input" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
          oninvalid="setCustomValidity('Podaj poprawny adres e-mail!')"    onchange="try{setCustomValidity('')}catch(e){}"></label>
        </div>

      </fieldset>

      <fieldset class="row">
        <div class="col-md-6">
        <label for="phone"><input type="tel" name="phone" placeholder="Numer telefonu"
          class="contact__form--input" required pattern="\+?\*?[\s\d\-]+" oninvalid="setCustomValidity('Podaj poprawny numer telefonu!')"
          onchange="try{setCustomValidity('')}catch(e){}"></label>

        </div>
        <div class="col-md-6">
          <label for="location"><input type="text" name="location" placeholder="Lokalizacja"
          class="contact__form--input" required oninvalid="setCustomValidity('Podaj lokalizację!')"
          onchange="try{setCustomValidity('')}catch(e){}"></label>
        </div>
      </fieldset>


      <fieldset class="row">
        <div class="col-sm-12">
          <label for="message">
          <textarea name="message" placeholder="Wiadomość" name="message"
          class="contact__form--textarea" required oninvalid="setCustomValidity('Napisz wiadomość!')"
          onchange="try{setCustomValidity('')}catch(e){}"></textarea></label>
        </div>
      </fieldset>

      <input type="submit" name="submit" class="contact__form--button" value="Wyślij">
    </form>

  </div>

</section>
