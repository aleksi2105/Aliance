<?php 
$page_title = 'Автохимия AG-Tech ';
$header_style = 'header-page-image';
$showTitle = true;
$showCta = true;
$mainImage = 'img/work.png';
$mainAlt = 'Работа с химией';
$aboutTitle = 'Собственное производство <br> автохимия AG-Tech';
$description = 'Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно. <br><br>
Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.';
include_once('./template-parts/header-page.php');?>
<?php include_once('./template-parts/about-image-text.php');?>
<section class="section distributor">
  
  <div class="container">
    <div class="distributor-wrapper">
      <div class="separator"></div>
      <h2 class="section-title">Генеральный дистрибьютор <br> премиальной автохимии</h2>
      <p class="types-text">Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали.</p>
    <ul class="clients-list">
      <li class="clients-list-item">
        <svg width="30" height="30" class="client-logo">
          <use xlink:href="./img/sprite.svg#Himic"></use>
        </svg>Полное описание товаров
      </li>
      <li class="clients-list-item">
        <svg width="30" height="30" class="client-logo">
            <use xlink:href="./img/sprite.svg#carwash"></use>
        </svg>Актуальные цены
      </li>
      <li class="clients-list-item">
        <svg width="30" height="30" class="client-logo">
          <use xlink:href="./img/sprite.svg#brush"></use>
        </svg>Лаки и краски
      </li>
      <li class="clients-list-item">
        <svg width="30" height="30" class="client-logo">
          <use xlink:href="./img/sprite.svg#Himic"></use>
        </svg>Химические производства
      </li>
    </ul>
    <button class="button download-button">
      <svg width="24" height="24" >
          <use xlink:href="./img/sprite.svg#download"></use>
      </svg>Скачать каталог</button>
    </div>
  </div>
  <picture >
        <source type="image/webp" srcset="./img/book.webp">
        <source type="image/jpeg" srcset="./img/book.png">
        <img src="./img/book.png" alt="Каталог" class="distributor-image">
  </picture>
  
</section>
<!-- /.section distributor -->
<?php include_once('./template-parts/research-block.php');?>
<!-- /.section-research -->
<section class="section section-light">
  <?php include_once('./template-parts/steps-swiper-block.php');?>
</section>
 <!-- section-steps -->
<?php include_once('./template-parts/clients-block.php');?>
<!-- /.section-clients -->
<?php include_once('./template-parts/footer.php');?>