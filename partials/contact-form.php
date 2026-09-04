<?php
// Форма обратной связи. Перед include можно задать:
// $contactGuardImg — декоративная картинка рядом с формой (по умолчаниюguard.png, у гуманитарной школы — island.png)
$contactGuardImg = $contactGuardImg ?? 'img/guard.png';
?>
<form class="contact-form" id="contactForm">
  <img src="<?= htmlspecialchars($contactGuardImg) ?>" alt="" class="contact-form__guard" loading="lazy">

  <h3 class="contact-form__title">Форма обратной связи</h3>

  <!-- Антибот (honeypot) -->
  <input type="text" name="company" tabindex="-1" autocomplete="off" aria-hidden="true"
         style="position:absolute; left:-9999px; width:1px; height:1px; opacity:0;">

  <!-- Антибот по времени заполнения -->
  <input type="hidden" name="form_started_at" id="form_started_at">

  <!-- Страница (чтобы всегда приходила) -->
  <input type="hidden" name="page" id="form_page">

  <label class="contact-form__field">
    <span>Ваше имя</span>
    <input type="text" name="name" required minlength="2" />
  </label>

  <label class="contact-form__field">
    <span>Номер телефона</span>
    <input type="tel" name="phone" required />
  </label>

  <label class="contact-form__field">
    <span>Ссылка на социальную сеть</span>
    <textarea name="comment" rows="2"></textarea>
  </label>

  <label class="contact-form__checkbox">
    <input type="checkbox" name="policy" required />
    <span>
      Соглашаюсь с политикой конфиденциальности и даю согласие
      на обработку персональных данных.
    </span>
  </label>

  <button class="contact-form__submit" type="submit">
    Отправить
  </button>
</form>
<div id="formToast" class="form-toast"></div>
