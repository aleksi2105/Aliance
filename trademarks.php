<?php
$page_title = 'Собственные торговые марки';
$header_style = 'header-bg-grey';
$showTitle = true;
$showCta = true;
include_once('./template-parts/header-page.php');?>
<section class="section own-brands trademarks-page">
  <?php
  include_once('./template-parts/trademarks-block.php');?>
</section>
<?php include_once('./template-parts/footer.php');?>