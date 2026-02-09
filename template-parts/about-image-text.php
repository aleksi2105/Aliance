<?php
$mainImage = $mainImage ?? 'img\big-photo-logo.png';
$mainAlt = $mainAlt ?? 'Aliance Production';
$aboutTitle = $aboutTitle ?? 'мы - эксперты в области <br> производства химии';
$description = $description ?? 'Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.'; ?>


<section class="section section-about">
  <div class="container">
    <div class="about-wrapper">
      <img src="<?= htmlspecialchars($mainImage) ?>" alt="<?= htmlspecialchars($mainAlt) ?>" class="big-photo-logo">
      <div class="about-description">
        <div class="separator"></div>
        <h2 class="section-title"><?= $aboutTitle ?></h2>
        <p class="about-text"><?= $description ?></p>
      </div>
    </div>
    <?php include_once('template-parts\swiper-features.php');?>
  </div>
</section>