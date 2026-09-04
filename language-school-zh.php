<!DOCTYPE html>
<html lang="ru">
<head>
<?php
$pageTitle = 'Китайский язык онлайн — курсы HSK | Study Umbrella';
$pageDescription = 'Курсы китайского языка онлайн: HSK1-HSK4, индивидуальные и групповые занятия, подготовка к экзаменам. Бесплатный пробный урок в Study Umbrella.';
$canonicalPath = '/language-school-zh.php';
$extraStyles = ['css/language.css', 'css/inner-switch.css', 'css/subject-hero.css'];
$courseSchema = [
  'name' => 'Курсы китайского языка',
  'description' => 'Китайский язык онлайн: HSK1-HSK4, индивидуальные и групповые занятия с преподавателем.',
];
include __DIR__ . '/partials/head-meta.php';

$showSwitcher = true;
$switcherLabel = '中文';
$switcherLinks = [
  ['href' => 'language-school-en.php', 'label' => 'English'],
  ['href' => 'language-school-es.php', 'label' => 'Español'],
  ['href' => 'language-school-zh.php', 'label' => '中文'],
];
$showCabinet = true;
?>
</head>

<body class="page-language page-chinese" style="--subj-accent: var(--zh-accent); --subj-on-accent: #000000;">

<?php include __DIR__ . '/partials/header.php'; ?>

<!-- HERO: CHINESE -->
<section class="hero hero--subject">
  <div class="container">
    <div class="hero-subj">

      <img class="hero-subj__bg-arrow" src="img/hero-arrow-bg.png" alt="" loading="lazy">
      <img class="hero-subj__hello-img" src="img/nihao.png" alt="你好" loading="lazy">

      <div class="hero-subj__row-wrap">
        <div class="hero-subj__row">

          <div class="hero-subj__left">

            <h1 class="hero-subj__title hero-enter">
              <span class="t t--black">УЧИТЬ</span>
              <span class="t t--accent">КИТАЙСКИЙ</span><br>

              <span class="hero-subj__line2">
                <span class="t t--accent">СОВРЕМЕННО</span>
                <span class="t t--black">И</span>
                <span class="t t--black">КОМФОРТНО!</span>
              </span>
            </h1>

            <div class="hero-subj__quote hero-enter" data-delay="1">
              *под зонтиком лучших преподавателей!
            </div>

            <div class="hero-subj__grid hero-enter" data-delay="2">

              <a href="#contacts" class="hero-subj__card hero-subj__card--level">
                <span class="hero-subj__icon">
                  <span class="hero-subj__icon-dot"></span>
                </span>
                <span class="hero-subj__level-text">
                  ОПРЕДЕЛИТЬ<br>
                  ВАШ УРОВЕНЬ<br>
                  ЯЗЫКА
                </span>
              </a>

              <div class="hero-subj__card hero-subj__card--c1">
                <div class="hero-subj__pill">Современно</div>
                <div class="hero-subj__card-text">
                  Используем актуальные методики обучения
                </div>
              </div>

              <div class="hero-subj__card hero-subj__card--c2">
                <div class="hero-subj__pill">Доступно</div>
                <div class="hero-subj__card-text">
                  Пробный урок с нашими преподавателями вы можете пройти
                  <strong>абсолютно бесплатно!</strong>
                </div>
              </div>

              <div class="hero-subj__card hero-subj__card--c3">
                <div class="hero-subj__pill">Легко</div>
                <div class="hero-subj__card-text">
                  Говорим и практикуем с первых занятий
                </div>
              </div>

              <div class="hero-subj__card hero-subj__card--c4">
                <div class="hero-subj__pill">Тест на уровень</div>
                <div class="hero-subj__card-text">
                  Вы можете пройти 10 минутный тест и узнать свой уровень языка
                  <strong>уже сейчас!</strong>
                </div>
              </div>

              <img src="img/vector-1.png" alt="" class="hero-subj__grid-arrow" loading="lazy">

            </div>
          </div>

          <div class="hero-subj__right hero-enter" data-delay="2">
            <img class="hero-subj__img" src="img/hero-chinese.webp" alt="Китайский язык">
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY START -->
<section class="section start-why" id="why-start">
  <div class="container start-why__container">

    <img class="start-why__pills" src="img/sw-pills.png" alt="" loading="lazy">

    <h2 class="start-why__title">
      <span class="start-why__line1">ПОЧЕМУ МЫ –</span><br>
      <span class="start-why__line2">ВАШ ЛЕГКИЙ СТАРТ?</span>
    </h2>

    <div class="start-why__content">

      <div class="start-why__left">

        <div class="start-why__item">
          <div class="start-why__num">01</div>
          <p>Мы не ругаем за ошибки,<br>мы поддерживаем всех учеников.</p>
        </div>

        <div class="start-why__item">
          <div class="start-why__num">02</div>
          <p>Методика наших преподавателей строится на индивидуальном подходе и подборе программы для каждого ученика.</p>
        </div>

        <div class="start-why__item">
          <div class="start-why__num">03</div>
          <p>Наши преподаватели — сертифицированные специалисты, помогающие студенту понять язык в кратчайшие сроки.</p>
        </div>

      </div>

      <div class="start-why__right">
        <img class="start-why__photo-rect" src="img/sw-photo-1.png" alt="" loading="lazy">
        <img class="start-why__photo-circle" src="img/sw-photo-2.png" alt="" loading="lazy">
        <img class="start-why__stars" src="img/sw-stars.png" alt="" loading="lazy">
      </div>

    </div>
  </div>
</section>

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
                <img src="img/teacher-2.jpg" alt="Гудкова Елизавета" loading="lazy">
              </div>
              <div class="teacher-card__badge">
                <img src="img/badge-cae2.png" alt="Сертификат HSK" loading="lazy">
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
                <img src="img/teacher-2.jpg" alt="Гудкова Елизавета" loading="lazy">
              </div>
              <div class="teacher-card__badge">
                <img src="img/badge-cae2.png" alt="Сертификат HSK" loading="lazy">
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
                <img src="img/teacher-2.jpg" alt="Гудкова Елизавета" loading="lazy">
              </div>
              <div class="teacher-card__badge">
                <img src="img/badge-cae2.png" alt="Сертификат HSK" loading="lazy">
              </div>
            </div>
            <h3 class="teacher-card__name">Гудкова Елизавета</h3>
            <p class="teacher-card__subject teacher-card__subject--chines">
              Китайский язык <br>Экзамен HSK3
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

<!--
  TODO (следующий шаг, нужны точные Figma Dev Mode значения и/или доп. картинки):
  1) Блок "УСЛУГИ" с ценами (Индивидуальные 60/90 мин, Групповые, Комплексные пакеты)
  2) Блок "И ЕЩЕ НЕМНОГО" (языковая библиотека / языковой кинотеатр / где искать друзей) — нужны фото
  Ниже — временно тот же компонент карточек курсов (.tracks/.track-card), но уже с
  правильным контентом по HSK-уровням вместо английского/испанского/китайского хаба.
-->
<section class="section" id="courses">
  <section class="section section--soft section--tracks">
    <div class="container">

      <h2 class="section__title section__title--red">
        КУРСЫ 中文
      </h2>

      <div class="tracks">

        <article class="track-card">
          <div class="track-card__content">
            <h3 class="track-card__title">HSK1-HSK2</h3>
            <p class="track-card__text">
              Правила чтения<br><br>
              Правила произношения<br><br>
              Базовая грамматика<br><br>
              Ключи<br><br>
              Первые 300 иероглифов
            </p>
          </div>
        </article>

        <article class="track-card">
          <div class="track-card__content">
            <h3 class="track-card__title">HSK2-HSK3</h3>
            <p class="track-card__text">
              Правила чтения<br><br>
              Правила произношения<br><br>
              Базовая грамматика<br><br>
              Ключи<br><br>
              Первые 300 иероглифов
            </p>
          </div>
        </article>

        <article class="track-card track-card--narrow">
          <div class="track-card__content">
            <h3 class="track-card__title">HSK3-HSK4</h3>
            <p class="track-card__text">
              Правила чтения<br><br>
              Правила произношения<br><br>
              Базовая грамматика<br><br>
              Ключи<br><br>
              Первые 300 иероглифов
            </p>
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
