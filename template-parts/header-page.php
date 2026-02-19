<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title><?= $page_title;?> - Aliance Production</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link" aria-label="Открыть страницу">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link" aria-label="Открыть страницу">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="./avtohim.php" aria-label="Открыть страницу">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#" aria-label="Открыть страницу">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#" aria-label="Открыть страницу">Дезинфицирующие средства
              </a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#" aria-label="Открыть страницу">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#" aria-label="Открыть страницу">Косметическая продукция
              </a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#" aria-label="Открыть страницу">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link" aria-label="Открыть страницу">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="./ag-tech.php" aria-label="Открыть страницу">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#" aria-label="Открыть страницу">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./error.php" class="mobile-menu-link" aria-label="Открыть страницу">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contact.php" class="mobile-menu-link" aria-label="Открыть страницу">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone" aria-label="Позвонить">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use xlink:href="./img/sprite.svg#PlacemarkFill"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use xlink:href="./img/sprite.svg#EmailSolid"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email" aria-label="Отправить e-mail">
          a.dragunov@tdaliance.ru
        </a>
      </div>
      <div class="mobile-social">
        <a href="#" aria-label="Открыть сайт VKontakte">
          <svg class="phone-icon" width="24" height="24">
            <use xlink:href="./img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" aria-label="Открыть сайт Instagram">
          <svg class="phone-icon" width="24" height="24">
            <use xlink:href="./img/sprite.svg#instagram"></use>
          </svg>
        </a>
      </div>
    </div>
    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle" aria-label="Открыть меню">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo" aria-label="Открыть главную страницу">
        <svg class="logo-svg logo-light">
          <use href="./img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="./img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link" aria-label="Открыть страницу">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link" aria-label="Открыть страницу">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link" aria-label="Открыть страницу">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="./error.php" class="header-nav-link" aria-label="Открыть страницу">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="./contact.php" class="header-nav-link" aria-label="Открыть страницу">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use xlink:href="./img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link" aria-label="Позвонить">+7 (499) 686-10-14</a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal" aria-label="Отправить запрос">
        <svg class="button-icon" width="24" height="24">
          <use xlink:href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text" data-toggle="modal" data-target="#feedback-modal">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <?php if ($showTitle): ?>
      <header class="header-pages <?= $header_style;?>">
      
        <div class="container header-page">
          <div class="separator"></div>
          <h1 class="header-title"><?= $page_title;?></h1>
          <nav aria-label="Хлебные крошки">
            <ol class="breadcrumb">
              <li><a href="/">Главная</a></li>
              <li aria-current="page">
                <span><?= $page_title;?></span>
              </li>
            </ol>
          </nav>
         </div>
        </div>
      </header>
      <?php endif; ?>
    