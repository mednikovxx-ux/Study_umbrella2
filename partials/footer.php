<?php
// Подвал + баннер cookie-согласия. Общий для всех страниц.
?>
<footer class="footer">
  <div class="container footer__inner">

    <!-- ЛОГО -->
    <a href="index.php" class="footer__logo">
      <img src="img/logo.png" alt="Study Umbrella" loading="lazy">
    </a>

    <!-- ЛЕВЫЕ ССЫЛКИ -->
    <nav class="footer__nav">
      <a href="#about">О нас</a>
      <a href="#contacts">Контакты</a>
      <a href="#courses">Начать заниматься</a>
    </nav>

    <!-- ПРАВЫЕ ССЫЛКИ (СТОЛБИК СПРАВА) -->
    <div class="footer__right">
      <a href="policy.php" class="footer__policy" target="_blank">Политика конфиденциальности</a>
      <a href="offer.php" class="footer__policy" target="_blank">Договор оферты</a>
      <a href="consent.php" class="footer__policy" target="_blank">Согласие на обработку персональных данных</a>
    </div>

    <!-- НИЖНЯЯ СТРОКА -->
    <div class="footer__legal">
      © <?= date('Y') ?> Study Umbrella. Все права защищены.
    </div>

  </div>
</footer>

<!-- COOKIE CONSENT -->
<div class="cookie-banner" id="cookieBanner">
  <div class="cookie-banner__content">
    <p class="cookie-banner__text">
      Мы используем файлы cookies для корректной работы сайта и улучшения пользовательского опыта.
      Продолжая пользоваться сайтом, вы соглашаетесь с их использованием.
      <a href="policy.php" target="_blank">Подробнее</a>
    </p>
    <button class="cookie-banner__btn" id="cookieAccept">
      Принять
    </button>
  </div>
</div>

<script src="assets/scroll-reveal.js"></script>
