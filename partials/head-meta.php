<?php
// Общие <head>-теги. Перед include задайте:
// $pageTitle, $pageDescription, $canonicalPath (например '/language-school-zh.php'), $extraStyles (массив путей к css)
$pageTitle = $pageTitle ?? 'Study Umbrella — онлайн школа';
$pageDescription = $pageDescription ?? 'Онлайн-школа Study Umbrella — языковые и гуманитарные курсы с личным преподавателем: английский, испанский, китайский, русский язык, история, обществознание. Бесплатный пробный урок.';
$canonicalPath = $canonicalPath ?? '/index.php';
$extraStyles = $extraStyles ?? [];

// TODO: заменить на реальный домен после подключения на Beget
$siteUrl = 'https://studyumbrella.ru';
$fullUrl = $siteUrl . $canonicalPath;

// Перед include можно также задать $courseSchema = ['name'=>..., 'description'=>...]
// на предметных страницах — тогда ниже добавится JSON-LD Course вдобавок к Organization.
$courseSchema = $courseSchema ?? null;
?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Шрифты: preconnect + прямая ссылка вместо @import в CSS (быстрее строится CSSOM) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@400;500;600;700&display=swap">

<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>" />
<link rel="canonical" href="<?= htmlspecialchars($fullUrl) ?>" />

<!-- Open Graph -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
<meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>" />
<meta property="og:url" content="<?= htmlspecialchars($fullUrl) ?>" />
<meta property="og:image" content="<?= htmlspecialchars($siteUrl) ?>/img/hero-main.webp" />
<meta property="og:locale" content="ru_RU" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>" />
<meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>" />

<!-- Favicon -->
<link rel="icon" href="img/favicon/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">

<!-- Styles -->
<link rel="stylesheet" href="css/globals.css" />
<link rel="stylesheet" href="css/main.css" />
<?php foreach ($extraStyles as $href): ?>
<link rel="stylesheet" href="<?= htmlspecialchars($href) ?>">
<?php endforeach; ?>

<!-- Structured data (SEO) -->
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'EducationalOrganization',
  'name' => 'Study Umbrella',
  'url' => $siteUrl . '/index.php',
  'logo' => $siteUrl . '/img/logo.png',
  'description' => 'Онлайн-школа языковых и гуманитарных курсов с индивидуальным подходом.',
  'sameAs' => [
    'https://vk.com/study_umbrella',
    'https://t.me/study_umbrella_online',
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>
<?php if ($courseSchema): ?>
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'Course',
  'name' => $courseSchema['name'],
  'description' => $courseSchema['description'],
  'provider' => [
    '@type' => 'EducationalOrganization',
    'name' => 'Study Umbrella',
    'sameAs' => $siteUrl . '/index.php',
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>
<?php endif; ?>
