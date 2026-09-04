<!DOCTYPE html>
<html lang="ru">
<head>
<?php
$pageTitle = 'Согласие на обработку персональных данных — Study Umbrella';
$pageDescription = 'Согласие на обработку персональных данных для пользователей сайта Study Umbrella.';
$canonicalPath = '/consent.php';
$extraStyles = ['css/legal.css'];
include __DIR__ . '/partials/head-meta.php';
?>
</head>

<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<section class="section legal">
  <div class="container">
    <h1 class="legal__title">Согласие на обработку персональных данных</h1>
    <p class="legal__updated">Дата публикации: 23.08.2026</p>

    <div class="legal__body">

      <p>
        Отправляя форму обратной связи на сайте Study Umbrella, я подтверждаю, что даю согласие на
        обработку моих персональных данных в соответствии с Федеральным законом от 27.07.2006
        № 152-ФЗ «О персональных данных» на следующих условиях.
      </p>

      <h2>1. Оператор</h2>
      <p>
        Study Umbrella, e-mail: <a href="mailto:umbrella.study.sc@gmail.com">umbrella.study.sc@gmail.com</a>.
      </p>

      <h2>2. Перечень персональных данных</h2>
      <ul>
        <li>имя;</li>
        <li>номер телефона;</li>
        <li>комментарий / ссылка на социальную сеть (если указаны).</li>
      </ul>

      <h2>3. Цель обработки</h2>
      <p>
        Связь с субъектом персональных данных для записи на пробный урок, консультации по курсам
        и предоставления информации об услугах школы. Подробнее — в
        <a href="policy.php">Политике конфиденциальности</a>.
      </p>

      <h2>4. Перечень действий с персональными данными</h2>
      <p>
        Сбор, запись, хранение, использование и передача данных сервису Google Apps Script
        исключительно для доставки заявки Оператору.
      </p>

      <h2>5. Срок действия согласия и порядок отзыва</h2>
      <p>
        Согласие действует до момента его отзыва. Отозвать согласие можно, направив
        соответствующий запрос на e-mail Оператора.
      </p>

      <h2>6. Подтверждение</h2>
      <p>
        Отправляя форму, я подтверждаю, что ознакомлен(а) с
        <a href="policy.php">Политикой конфиденциальности</a> сайта.
      </p>

    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>

<script src="assets/nav.js"></script>
<script src="assets/cookie-consent.js"></script>

</body>
</html>
