<?php
// Шапка сайта. Перед include можно задать:
// $showSwitcher (bool) — показать пилюлю-переключатель между предметами внутри хаба
// $switcherLabel (string) — подпись на пилюле переключателя (например 'English', 'История')
// $switcherLinks (array) — [['href'=>'...', 'label'=>'...'], ...] пункты переключателя
// $showCabinet (bool) — показать пункт "Личный кабинет" (только на предметных страницах языковой школы)
$showSwitcher = $showSwitcher ?? false;
$showCabinet = $showCabinet ?? false;
$switcherLabel = $switcherLabel ?? 'Переключить';
$switcherLinks = $switcherLinks ?? [];
?>
<header class="header" id="siteHeader">
  <div class="container header__inner">

    <!-- ЛОГОТИП -->
    <a href="index.php" class="logo">
      <img src="img/logo.png" class="logo__img" alt="Логотип" loading="lazy">
    </a>

    <!-- МЕНЮ -->
    <nav class="nav">
      <a href="#about">О нас</a>
      <a href="#teachers">Наши преподаватели</a>
      <a href="#offers">Наши предложения</a>
      <a href="#courses">Наши курсы</a>
      <a href="#contacts">Контакты</a>

      <!-- МОБИЛКА: ГЛАВНАЯ -> 2 уровня -->
      <div class="nav-main-group">
        <button class="nav-main-toggle" type="button">Главная <span class="chevron">▾</span></button>

        <div class="nav-main-submenu"><div class="nav-main-submenu__inner">

          <!-- 2-Й УРОВЕНЬ: ЯЗЫКОВАЯ ШКОЛА -->
          <div class="nav-sub-group">
            <button class="nav-sub-toggle" type="button">Языковая школа <span class="chevron">▾</span></button>
            <div class="nav-sub-submenu"><div class="nav-sub-submenu__inner">
              <a href="language-school-en.php" style="--link-accent: var(--en-accent)">English</a>
              <a href="language-school-es.php" style="--link-accent: var(--es-accent)">Español</a>
              <a href="language-school-zh.php" style="--link-accent: var(--zh-accent)">中文</a>
            </div></div>
          </div>

          <!-- 2-Й УРОВЕНЬ: ГУМАНИТАРНАЯ ШКОЛА -->
          <div class="nav-sub-group">
            <button class="nav-sub-toggle" type="button">Гуманитарная школа <span class="chevron">▾</span></button>
            <div class="nav-sub-submenu"><div class="nav-sub-submenu__inner">
              <a href="humanities-history.php" style="--link-accent: var(--hist-accent)">История</a>
              <a href="humanities-social.php" style="--link-accent: var(--soc-accent)">Обществознание</a>
              <a href="humanities-russian.php" style="--link-accent: var(--rus-accent)">Русский язык</a>
            </div></div>
          </div>

        </div></div>
      </div>
    </nav>

    <!-- ПРАВАЯ ЧАСТЬ (ДЕСКТОП) -->
    <div class="header__right<?= $showSwitcher ? ' header__right--switch' : '' ?>">

      <!-- Главная -->
      <div class="dropdown" id="mainDropdown">
        <button class="btn btn--ghost btn--main dropdown__toggle" id="mainMenuToggle" type="button">
          Главная <span class="chevron">▾</span>
        </button>
        <div class="dropdown__menu" id="mainMenu">
          <a href="language-school.php" class="dropdown__group-link">Языковая школа</a>
          <a href="language-school-en.php" class="dropdown__sub-link" style="--link-accent: var(--en-accent)">English</a>
          <a href="language-school-es.php" class="dropdown__sub-link" style="--link-accent: var(--es-accent)">Español</a>
          <a href="language-school-zh.php" class="dropdown__sub-link" style="--link-accent: var(--zh-accent)">中文</a>

          <a href="humanities-school.php" class="dropdown__group-link">Гуманитарная школа</a>
          <a href="humanities-history.php" class="dropdown__sub-link" style="--link-accent: var(--hist-accent)">История</a>
          <a href="humanities-social.php" class="dropdown__sub-link" style="--link-accent: var(--soc-accent)">Обществознание</a>
          <a href="humanities-russian.php" class="dropdown__sub-link" style="--link-accent: var(--rus-accent)">Русский язык</a>
        </div>
      </div>

      <?php if ($showSwitcher): ?>
      <!-- Переключатель между предметами внутри хаба -->
      <div class="dropdown" id="switchDropdown">
        <button class="btn btn--ghost btn--main btn--switch dropdown__toggle" id="switchToggle" type="button">
          <?= htmlspecialchars($switcherLabel) ?> <span class="chevron">▾</span>
        </button>
        <div class="dropdown__menu" id="switchMenu">
          <?php foreach ($switcherLinks as $link): ?>
          <a href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if ($showCabinet): ?>
      <!-- TODO: реальный логин появится вместе с личным кабинетом (отдельный этап) -->
      <a href="#" class="btn btn--ghost btn--main btn--cabinet">Личный кабинет</a>
      <?php endif; ?>

    </div>

    <!-- БУРГЕР ДЛЯ МОБИЛЬНОЙ ВЕРСИИ -->
    <button class="burger burger--with-text" id="burgerToggle" type="button" aria-label="Открыть меню">
      <span class="burger__text">Главная</span>
      <span class="burger__icon" aria-hidden="true">
        <span></span><span></span><span></span>
      </span>
    </button>

  </div>
</header>
