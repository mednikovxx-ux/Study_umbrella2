<!DOCTYPE html>
<html lang="ru">
<head>
<?php
$pageTitle = 'Языковая школа — английский, испанский, китайский | Study Umbrella';
$pageDescription = 'Языковая онлайн-школа Study Umbrella: английский, испанский и китайский язык с индивидуальным подходом. Бесплатный пробный урок.';
$canonicalPath = '/language-school.php';
$extraStyles = ['css/language.css', 'css/inner-switch.css'];
include __DIR__ . '/partials/head-meta.php';
?>
</head>

<body class="page-language">

<?php include __DIR__ . '/partials/header.php'; ?>

<!-- HERO -->
<section class="hero">
  <div class="container hero__inner">

    <div class="hero__content">

      <h1 class="hero__title hero-enter">
        <span class="hero__title-top">ЯЗЫКОВАЯ ОНЛАЙН ШКОЛА</span><br>
        <span class="hero__title-main">STUDY UMBRELLA</span>
      </h1>

      <p class="hero__text hero-enter" data-delay="1">
        Ваш надежный зонт в мире<br>
        Языковых барьеров!
      </p>

      <div class="hero__cta hero-enter" data-delay="2">
        <a href="#contacts" class="btn btn--primary hero__btn">
          <strong>Проверь себя уже сейчас!</strong>
        </a>
        <img src="img/cta-decor.png" alt="" class="hero__cta-decor" loading="lazy">
      </div>

      <img src="img/hero-arrow.png" alt="" class="hero__arrow" loading="lazy">
    </div>

    <div class="hero__image-wrap hero-enter" data-delay="2">
      <img src="img/hero-language.webp" alt="Языковая онлайн-школа" class="hero__image">
    </div>

  </div>
</section>

<!-- НАША ЦЕЛЬ -->
<section class="section" id="about">
  <div class="container">

    <h2 class="section__title">
      В ЧЕМ <span class="section__title-accent">НАША ЦЕЛЬ?</span>
    </h2>

    <div class="goal-cards">

      <article class="goal-card goal-card--peach">
        <h3>Поддержать студентов</h3>
        <p>Наши учителя оказывают всеобъемлющую поддержку нашим ученикам на каждом этапе обучения.</p>
      </article>

      <article class="goal-card goal-card--mint">
        <h3>Разделить уникальный опыт</h3>
        <p>Наша главная цель - разделить уникальный опыт наших преподавателей с учениками.</p>
      </article>

      <article class="goal-card goal-card--blue">
        <h3>Расширить мировоззрение</h3>
        <p>Мы не "зубрим", мы расширяем мировозрение наших учеников за счет изучения новых предметов.</p>
      </article>

    </div>

    <div class="about-text">
      <p class="about-line">
       <strong> Изучайте самые актуальные языки мира легко и эффективно</strong>
        <span class="accent">с лучшими преподавателями.</span>
      </p>
      <p>
        Мы предлагаем комфортные занятия и максимальную эффективность, а также
        свободный график и интересные домашние задания.
      </p>
    </div>

  <section class="section" id="teachers">
    <div class="container">

      <h2 class="section__title">
        НАШИ ПРЕПОДАВАТЕЛИ
      </h2>

      <div class="teachers-slider">

        <button class="teachers-arrow teachers-arrow--left" type="button" aria-label="Назад">
          <img src="img/arrow-left.png" alt="" loading="lazy">
        </button>

        <div class="teachers-slider__viewport">
          <div class="teachers-slider__track">

            <article class="teacher-card">
              <div class="teacher-card__photo-wrap">
                <div class="teacher-card__photo">
                  <img src="img/teacher-1.jpg" alt="Лапина Анна" loading="lazy">
                </div>
                <div class="teacher-card__badge">
                  <img src="img/badge-cae.png" alt="Сертификат CAE" loading="lazy">
                </div>
              </div>
              <h3 class="teacher-card__name">Лапина Анна</h3>
              <p class="teacher-card__subject teacher-card__subject--english">
                Английский язык <br>Экзамен CAE-C2
              </p>
              <p class="teacher-card__exp"><strong>Опыт преподавания:</strong> 3 года</p>
            </article>

            <article class="teacher-card">
              <div class="teacher-card__photo-wrap">
                <div class="teacher-card__photo">
                  <img src="img/teacher-2.jpg" alt="Гудкова Елизавета" loading="lazy">
                </div>
                <div class="teacher-card__badge">
                  <img src="img/badge-cae2.png" alt="Экзамен HSK3" loading="lazy">
                </div>
              </div>
              <h3 class="teacher-card__name">Гудкова Елизавета</h3>
              <p class="teacher-card__subject teacher-card__subject--chines">
                Китайский язык <br>Экзамен HSK3
              </p>
              <p class="teacher-card__exp"><strong>Опыт преподавания:</strong> 3 года</p>
            </article>

            <article class="teacher-card">
              <div class="teacher-card__photo-wrap">
                <div class="teacher-card__photo">
                  <img src="img/teacher-3.jpg" alt="Железнякова Ульяна" loading="lazy">
                </div>
                <div class="teacher-card__badge">
                  <img src="img/badge-cae3.png" alt="Экзамен DELE-B2" loading="lazy">
                </div>
              </div>
              <h3 class="teacher-card__name">Железнякова Ульяна</h3>
              <p class="teacher-card__subject teacher-card__subject--spanies">
                Испанский язык <br>Экзамен DELE-B2
              </p>
              <p class="teacher-card__exp"><strong>Опыт преподавания:</strong> 3 года</p>
            </article>

            <article class="teacher-card">
              <div class="teacher-card__photo-wrap">
                <div class="teacher-card__photo">
                  <img src="img/teacher-1.jpg" alt="Лапина Анна" loading="lazy">
                </div>
                <div class="teacher-card__badge">
                  <img src="img/badge-cae.png" alt="Сертификат CAE" loading="lazy">
                </div>
              </div>
              <h3 class="teacher-card__name">Лапина Анна</h3>
              <p class="teacher-card__subject teacher-card__subject--english">
                Английский язык <br>Экзамен CAE-C2
              </p>
              <p class="teacher-card__exp"><strong>Опыт преподавания:</strong> 3 года</p>
            </article>

            <article class="teacher-card">
              <div class="teacher-card__photo-wrap">
                <div class="teacher-card__photo">
                  <img src="img/teacher-2.jpg" alt="Гудкова Елизавета" loading="lazy">
                </div>
                <div class="teacher-card__badge">
                  <img src="img/badge-cae2.png" alt="Экзамен HSK3" loading="lazy">
                </div>
              </div>
              <h3 class="teacher-card__name">Гудкова Елизавета</h3>
              <p class="teacher-card__subject teacher-card__subject--chines">
                Китайский язык <br>Экзамен HSK3
              </p>
              <p class="teacher-card__exp"><strong>Опыт преподавания:</strong> 3 года</p>
            </article>

            <article class="teacher-card">
              <div class="teacher-card__photo-wrap">
                <div class="teacher-card__photo">
                  <img src="img/teacher-3.jpg" alt="Железнякова Ульяна" loading="lazy">
                </div>
                <div class="teacher-card__badge">
                  <img src="img/badge-cae3.png" alt="Экзамен DELE-B2" loading="lazy">
                </div>
              </div>
              <h3 class="teacher-card__name">Железнякова Ульяна</h3>
              <p class="teacher-card__subject teacher-card__subject--spanies">
                Испанский язык <br>Экзамен DELE-B2
              </p>
              <p class="teacher-card__exp"><strong>Опыт преподавания:</strong> 3 года</p>
            </article>

          </div>
        </div>

        <button class="teachers-arrow teachers-arrow--right" type="button" aria-label="Вперёд">
          <img src="img/arrow-right.png" alt="" loading="lazy">
        </button>

      </div>

    </div>
  </section>

  <!-- ПОЧЕМУ ВЫБИРАЮТ НАС -->
  <section class="section section--why" id="why">
    <div class="container">

      <div class="why-head">
        <img src="img/why-umbrella.png" alt="" class="why-head__umbrella" loading="lazy">
        <h2 class="why-title-main">ПОЧЕМУ ВЫБИРАЮТ НАС?</h2>
        <h3 class="why-title-sub">ПОТОМУ ЧТО ЗАНЯТИЯ С НАМИ ЭТО:</h3>
      </div>

      <div class="formats">
        <article class="format-card format-card--soft">
          <div class="format-card__label">Современно</div>
          <p>Используем только современные методики обучения.</p>
        </article>

        <article class="format-card format-card--peach">
          <div class="format-card__label">Доступно</div>
          <p>Пробный урок с нашими преподавателями вы можете пройти <strong>абсолютно бесплатно.</strong></p>
        </article>

        <article class="format-card format-card--mint">
          <div class="format-card__label">Легко</div>
          <p>Говорим о сложном простыми словами, учим не «зубрить», а понимать.</p>
        </article>

        <article class="format-card format-card--lilac format-card--with-decor">
          <div class="format-card__label">«По-домашнему»</div>
          <p>
            Максимальная гибкость в выборе направлений и формата занятий для ученика.
          </p>
        </article>
      </div>
      <img src="img/format-decor.png" alt="" class="why-teapot" loading="lazy">
    </div>
  </section>
  </div>
</section>

<!-- НАШИ ПРОГРАММЫ И ФОРМАТЫ -->
<section class="section section--soft section--programs" id="offers">
  <div class="container">
    <img src="img/dancer.png" alt="" class="offers-dancer" loading="lazy">

    <h2 class="section__title section__title--left">
      <span class="programs-title-main">НАШИ ПРОГРАММЫ</span>
      <span class="programs-title-accent">И ФОРМАТЫ</span>
    </h2>

    <div class="programs-grid">

      <div class="programs-grid__top">
        <article class="program-card program-card--wide">
          <div class="program-card__icon">
            <img src="img/program-1.png" alt="Курсы для любого уровня" loading="lazy">
          </div>
          <h3 class="program-card__title">
            Курсы, подходящие для любого уровня языка.
          </h3>
          <p class="program-card__text">
            Подберём формат занятий под ваш стартовый уровень и цели.
          </p>
          <a href="#contacts" class="program-card__btn">Записаться</a>
        </article>

        <div class="programs-info">
         <br> <strong> Наша задача — <span class="programs-info__accent">
            провести вас сквозь мир удивительных языковых открытий.
          </span>Для этого мы готовы предложить целый ряд форматов обучения, подходящих под любой запрос</strong>
        </div>
      </div>

      <div class="programs-grid__bottom">
        <article class="program-card">
          <div class="program-card__icon">
            <img src="img/program-2.png" alt="Подготовка к экзаменам" loading="lazy">
          </div>
          <h3 class="program-card__title">
            Курсы для подготовки к экзаменам.
          </h3>
          <p class="program-card__text">
            Поможем системно подготовиться и чувствовать себя уверенно.
          </p>
          <a href="#contacts" class="program-card__btn">Записаться</a>
        </article>

        <article class="program-card">
          <div class="program-card__icon">
            <img src="img/program-3.png" alt="Индивидуальные занятия" loading="lazy">
          </div>
          <h3 class="program-card__title">
            Индивидуальные занятия с преподавателем.
          </h3>
          <p class="program-card__text">
            Личные цели, персональный темп и максимум внимания.
          </p>
          <a href="#contacts" class="program-card__btn">Записаться</a>
        </article>

        <article class="program-card">
          <div class="program-card__icon">
            <img src="img/program-4.png" alt="Занятия в мини-группах" loading="lazy">
          </div>
          <h3 class="program-card__title">
            Занятия в мини-группах от 2 до 4 человек.
          </h3>
          <p class="program-card__text">
            Живое общение и поддерживающая атмосфера.
          </p>
          <a href="#contacts" class="program-card__btn">Записаться</a>
        </article>
      </div>

    </div>
  </div>
</section>

<section class="section" id="courses">
  <section class="section section--soft section--tracks">
    <div class="container">

      <h2 class="section__title section__title--red">
        ДОСТУПНЫЕ НАПРАВЛЕНИЯ:
      </h2>

      <div class="tracks">

        <!-- English -->
        <article class="track-card">
          <div class="track-card__image-wrap">
            <img src="img/language-1.webp" alt="Курсы английского" class="track-card__image" loading="lazy">
          </div>
          <div class="track-card__content">
            <h3 class="track-card__title">Курсы английского.</h3>
            <p class="track-card__text">
              Базовые языковые курсы.<br>
              Курсы для продвинутого уровня.<br>
              Специальные предметные курсы.
            </p>
            <a href="language-school-en.php" class="track-card__arrow">
              <img src="img/track-arrow.png" alt="Подробнее" loading="lazy">
            </a>
          </div>
        </article>

        <!-- Español -->
        <article class="track-card">
          <div class="track-card__image-wrap">
            <img src="img/language-2.webp" alt="Курсы испанского" class="track-card__image" loading="lazy">
          </div>
          <div class="track-card__content">
            <h3 class="track-card__title">Курсы испанского.</h3>
            <p class="track-card__text">
              Базовые языковые курсы.<br>
              Курсы для продвинутого уровня.<br>
              Специальные предметные курсы.
            </p>
            <a href="language-school-es.php" class="track-card__arrow">
              <img src="img/track-arrow.png" alt="Подробнее" loading="lazy">
            </a>
          </div>
        </article>

        <!-- 中文 -->
        <article class="track-card track-card--narrow">
          <div class="track-card__image-wrap">
            <img src="img/language-3.webp" alt="Курсы китайского" class="track-card__image" loading="lazy">
          </div>
          <div class="track-card__content">
            <h3 class="track-card__title">Курсы китайского.</h3>
            <p class="track-card__text">
              Базовые языковые курсы.<br>
              Курсы для продвинутого уровня.<br>
              Специальные предметные курсы.
            </p>
            <a href="language-school-zh.php" class="track-card__arrow">
              <img src="img/track-arrow.png" alt="Подробнее" loading="lazy">
            </a>
          </div>
        </article>

      </div>
    </div>
  </section>
</section>

<!-- КОНТАКТЫ / ФОРМА -->
<section class="section section--contacts" id="contacts">
  <div class="container contact">

    <div class="contact__left">
      <h2 class="contact__title">
        Запишитесь на вводный
        <span class="contact__title-accent">бесплатный урок</span>
      </h2>

      <p class="contact__text">
        Мы всегда рады пообщаться с вами, ответить на любые ваши вопросы
        и записать вас на пробный урок!
      </p>
      <p class="contact__text">
        Свяжитесь с нами или оставьте заявку в форме обратной связи.
      </p>

      <img src="img/hero-arrow2.png" alt="" class="contact__arrow" loading="lazy">

      <h3 class="contact__subtitle">Свяжитесь с нами!</h3>

      <div class="contact__socials">
        <a href="https://vk.com/study_umbrella?from=groups" class="contact__social contact__social--vk">
          <img src="img/social-vk.png" alt="ВКонтакте" loading="lazy">
        </a>
        <a href="https://t.me/study_umbrella_online" class="contact__social contact__social--tg">
          <img src="img/social-tg.png" alt="Telegram" loading="lazy">
        </a>
        <a href="mailto:umbrella.study.sc@gmail.com" class="contact__social contact__social--mail">
          <img src="img/social-mail.png" alt="E-mail" loading="lazy">
        </a>
      </div>
    </div>

    <?php include __DIR__ . '/partials/contact-form.php'; ?>

  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>

<script src="assets/nav.js"></script>
<script src="assets/teachers-carousel.js"></script>
<script src="assets/cookie-consent.js"></script>
<script src="assets/contact-form.js"></script>

</body>
</html>
