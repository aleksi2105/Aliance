<?php
$page_title = 'Контакты';
$header_style = 'header-bg-grey';
$showTitle = true;
$showCta = true;
include_once('./template-parts/header-page.php');?>
<section class="section contacts">
  <div class="container">
    <div class="footer-top contacts-top">
      <a href="tel:+74996861014" class="contacts-phone">+7 (499) 686-10-14</a>
      <div class="footer-info">
      <svg class="phone-icon" width="32" height="32">
        <use xlink:href="./img/sprite.svg#PlacemarkFill"></use>
      </svg>
      <address class="contacts-info-address">
              г. Москва, Холодильный пер. 4к1с8
      </address>
      </div>
      <div class="footer-info">
      <svg class="phone-icon" width="30" height="30">
        <use xlink:href="./img/sprite.svg#EmailSolid"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="contacts-info-email">
              a.dragunov@tdaliance.ru
      </a>
      </div>
      <div class="footer-social">
      <a href="#" class="footer-social-link">
        <svg class="footer-social-icon" width="36" height="36">
          <use xlink:href="./img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a href="#" class="footer-social-link">
        <svg class="footer-social-icon" width="36" height="36">
          <use xlink:href="./img/sprite.svg#instagram"></use>
        </svg>
      </a>
      </div>
    </div>
    <img src="./img/map.png" alt="Карта" class="contacts-map">
  </div>
</section>
<!-- /.section contacts -->
<?php include_once('./template-parts/footer.php');?>