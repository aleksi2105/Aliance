<?php
$page_title = 'Ошибка';
$header_style = 'header-bg-grey';
$showCta = false;
$showTitle = false;
include_once('./template-parts/header-page.php');?>
<section class="error">
  <div class="error-wrapper">
    <div class="error-404">404</div>
    <h1 class="error-title">Страница не найдена</h1>
    <p class="error-text">Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.</p>
    <a href="./index.php" class="button error-button">Вернуться на главную</a>
  </div>
</section>
<!-- /.error -->
<?php include_once('./template-parts/footer.php');?>