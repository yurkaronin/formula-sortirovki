<?php
  session_start();
  $_SESSION['GET'] = $_GET;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Формула сортировки - сортировка продуктов на премиум оборудовании в Воронеже.</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="yandex-verification" content="8d3a5ce433417dd6" />
  <meta name="description" content="Описание">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/style.min.css">
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(66621379, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/66621379" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>

<body class="body">
  <div class="progress-bar"></div>
  <header class="header">
    <div class="container">
      <div class="header__wrapper">
        <div class="header__logo"><img class="header__image" src="img/logotype.png" alt="Логотип компании" width="174"
            height="34"> <span class="header__logo-description">Сортировка пищевой продукции и&nbsp;вторсырья</span>
        </div>
        <div class="header__telephone telephone"><a class="telephone__link" href="tel:89204284224"><span
              class="telephone__details">8 (920) 428-42-24</span></a></div>
        <div class="header__messengers messengers">
          <ul class="messengers__list">
            <li class="messengers__item"><a class="messengers__link messengers__link--telegram" href=""><span
                  class="messengers__details hide">напишите нам в Telegram</span></a></li>
            <li class="messengers__item"><a class="messengers__link messengers__link--whatsapp" href=""><span
                  class="messengers__details hide">Напишите нам в WhatsApp</span></a></li>
            <li class="messengers__item"><a class="messengers__link messengers__link--viber" href=""><span
                  class="messengers__details hide">Напишите нам в Viber</span></a></li>
            <li class="messengers__item"><a class="messengers__link messengers__link--show" href="tel:89805555855"><span
                  class="messengers__details">8 (980) 555-58-55</span></a></li>
          </ul>
        </div>
        <div class="header__button"><a class="header__link button button--transparent show_popup" href="#"
            rel="callback-top">Заказать звонок</a></div><button class="header__burger desktop-hide" id="nav-icon"
          type="button"><span></span> <span></span> <span></span></button>
      </div>
    </div>
  </header>
  <nav class="header__navigation navigation">
    <div class="container">
      <ul class="navigation__list">
        <li class="navigation__item"><a href="#first-screen" class="navigation__link"
            onclick="slowScroll('#first-screen')">Главная</a></li>
        <li class="navigation__item"><a href="#sale" class="navigation__link" onclick="slowScroll('#sale')">Скидки</a>
        </li>
        <li class="navigation__item"><a href="#products" class="navigation__link" onclick="slowScroll('#products')">Что
            сортируем</a></li>
        <li class="navigation__item"><a href="#technologies" class="navigation__link"
            onclick="slowScroll('#technologies')">Технологии</a></li>
        <li class="navigation__item"><a href="#steps" class="navigation__link" onclick="slowScroll('#steps')">Как мы
            работаем</a></li>
        <li class="navigation__item"><a href="#contacts" class="navigation__link"
            onclick="slowScroll('#contacts')">Контакты</a></li>
      </ul>
    </div>
  </nav>
  <main>
    <section class="first-screen" id="first-screen">
      <div class="container">
        <!-- Слайдер с фотосепараторами  -->
        <div class="first-screen__slider slider-top swiper-container">
          <div class="slider-top__wrapper swiper-wrapper">
            <div class="slider-top__item swiper-slide"><img class="slider-top__image"
                src="img/slider-top/slider-items-1.png" alt=""></div>
            <div class="slider-top__item swiper-slide"><img class="slider-top__image"
                src="img/slider-top/slider-items-2.png" alt=""></div>
            <div class="slider-top__item swiper-slide"><img class="slider-top__image"
                src="img/slider-top/slider-items-3.png" alt=""></div>
            <div class="slider-top__item swiper-slide"><img class="slider-top__image"
                src="img/slider-top/slider-items-4.png" alt=""></div>
          </div>
        </div>
        <div class="first-screen__wrapper">
          <div class="first-screen__details">
            <h2 class="first-screen__title title revealator-slideup">Сортировка на<br>премиум оборудовании<br>Без потери
              годного сырья</h2>
            <div class="first-screen__promo">
              <p class="first-screen__text">Узнайте стоимость доставки и&nbsp;сортировки за 3 шага</p><a
                class="first-screen__button button" href="#conversus_popup_5159">Рассчитать стоимость</a>
            </div>
          </div>
          <ul class="first-screen__benefits benefits">
            <li class="benefits__item revealator-slideleft revealator-delay">Сортировка на премиум оборудовании Сапсан,
              Meyer и&nbsp;Julite</li>
            <li class="benefits__item revealator-slideright revealator-delay">Быстрая настройка фотосепаратора на вашем
              продукте</li>
            <li class="benefits__item revealator-slideleft revealator-delay">Очистка продукта от мельчайших дефектов
            </li>
            <li class="benefits__item revealator-slideright revealator-delay">Качество очистки до 99,99%</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="video-gallery">
      <h2 class="visually-hidden">Основные направления в промышленности, которым требуются наши услуги</h2>
      <ul class="video-gallery__list">
        <li class="video-gallery__item"><span class="video-gallery__title">Сельское хозяйство</span><video
            class="video-gallery__video" poster="video/1.jpg">
            <source src="video/1.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;"></video></li>
        <li class="video-gallery__item"><span class="video-gallery__title">Пищевая промышленность</span><video
            class="video-gallery__video" poster="video/2.jpg">
            <source src="video/2.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;"></video></li>
        <li class="video-gallery__item"><span class="video-gallery__title">Вторсырьё</span><video
            class="video-gallery__video" poster="video/3.jpg">
            <source src="video/3.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;"></video></li>
      </ul>
    </section>
    <section class="products" id="products">
      <div class="container">
        <h2 class="products__title title title--two revealator-slideup">Сельское хозяйство</h2>
        <ul class="products__list">
          <li class="products__item"><a class="products__link show_popup" href="#" rel="agriculture-1"><img
                class="products__image revealator-zoomin revealator-delay" src="img/products/agriculture/1.jpg"
                alt="Картинка продукта"> <span class="products__name">Зерновые культуры</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="agriculture-2"><img
                class="products__image revealator-zoomin revealator-delay" src="img/products/agriculture/2.jpg"
                alt="Картинка продукта"> <span class="products__name">Мелкосемянные и&nbsp;масличные культуры</span></a>
          </li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="agriculture-3"><img
                class="products__image revealator-zoomin revealator-delay" src="img/products/agriculture/3.jpg"
                alt="Картинка продукта"> <span class="products__name">Бобовые культуры</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="agriculture-4"><img
                class="products__image revealator-zoomin revealator-delay" src="img/products/agriculture/4.jpg"
                alt="Картинка продукта"> <span class="products__name">Крупы</span></a></li>
        </ul>
      </div>
    </section>
    <section class="sorting-lines">
      <div class="container">
        <div class="sorting-lines__content">
          <h2 class="sorting-lines__title title title--three revealator-slideleft revealator-delay">Линия очистки
            сельскохозяйственных культур</h2>
          <p class="sorting-lines__text">Оптимальный подбор и настройка оборудования под ваш продукт.</p>
        </div><a class="sorting-lines__button button" href="#contact-form"
          onclick="slowScroll('#contact-form')">Заказать консультацию</a>
      </div>
    </section>
    <section class="products products--two">
      <div class="container">
        <h2 class="products__title title title--two revealator-slideup">Пищевая промышленность</h2>
        <ul class="products__list">
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-1"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/1.jpg"
                alt="Картинка продукта"> <span class="products__name">Орехи</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-2"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/2.jpg"
                alt="Картинка продукта"> <span class="products__name">Замороженные продукты</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-3"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/3.jpg"
                alt="Картинка продукта"> <span class="products__name">Сушеные овощи и&nbsp;фрукты</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-4"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/4.jpg"
                alt="Картинка продукта"> <span class="products__name">Морепродукты</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-5"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/5.jpg"
                alt="Картинка продукта"> <span class="products__name">Консервы и&nbsp;полуфабрикаты</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-6"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/6.jpg"
                alt="Картинка продукта"> <span class="products__name">Кофе, чай</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-7"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/7.jpg"
                alt="Картинка продукта"> <span class="products__name">Специи</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="food-industry-8"><img
                class="products__image revealator-zoomout revealator-delay" src="img/products/food-industry/8.jpg"
                alt="Картинка продукта"> <span class="products__name">Снэки</span></a></li>
        </ul>
      </div>
    </section>
    <section class="sorting-lines sorting-lines--two">
      <div class="container">
        <div class="sorting-lines__content">
          <h2 class="sorting-lines__title title title--three revealator-slideleft revealator-delay">Линия сортировки
            продуктов пищевой промышленности</h2>
          <p class="sorting-lines__text">Оптимальный подбор и настройка оборудования под ваш продукт.</p>
        </div><a class="sorting-lines__button button" href="#contact-form"
          onclick="slowScroll('#contact-form')">Заказать консультацию</a>
      </div>
    </section>
    <section class="products products--three">
      <div class="container">
        <h2 class="products__title title title--two revealator-slideup">Переработка вторсырья</h2>
        <ul class="products__list">
          <li class="products__item"><a class="products__link show_popup" href="#" rel="recycling-1"><img
                class="products__image revealator-rotateleft revealator-delay" src="img/products/recycling/1.jpg"
                alt="Картинка продукта"> <span class="products__name">Пластик</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="recycling-2"><img
                class="products__image revealator-rotateleft revealator-delay" src="img/products/recycling/2.jpg"
                alt="Картинка продукта"> <span class="products__name">Пластмассы</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="recycling-3"><img
                class="products__image revealator-rotateleft revealator-delay" src="img/products/recycling/3.jpg"
                alt="Картинка продукта"> <span class="products__name">Стеклобой</span></a></li>
          <li class="products__item"><a class="products__link show_popup" href="#" rel="recycling-4"><img
                class="products__image revealator-rotateleft revealator-delay" src="img/products/recycling/4.jpg"
                alt="Картинка продукта"> <span class="products__name">Бумага, картон</span></a></li>
        </ul>
      </div>
    </section>
    <section class="technologies" id="technologies">
      <div class="container">
        <h2 class="technologies__title title title--two revealator-slideup">Наши технологии – гарантия качества очистки
        </h2>
        <div class="technologies__wrapper">
          <ul class="technologies__list technologies__list--first">
            <li class="technologies__item"><img class="technologies__image revealator-slidedown revealator-delay"
                src="img/technologies/technologies-1.jpg" alt="Фотография инновационных технологий">
              <div class="technologies__details">
                <h3 class="technologies__name">3D анализ продукта в процессе сортировки</h3>
                <div class="technologies__descriptions">Анализ продукта со всех сторон. Распознавание примесей сразу по
                  нескольким критериям – форма, цвет, размер, наличие пятен и ростков! Наши алгоритмы сортировки
                  позволяют удалять любые засорители.</div>
              </div>
            </li>
            <li class="technologies__item"><img class="technologies__image revealator-slidedown"
                src="img/technologies/technologies-2.jpg" alt="Фотография инновационных технологий">
              <div class="technologies__details">
                <h3 class="technologies__name">Европейская оптика и комплектующие</h3>
                <div class="technologies__descriptions">Используем только профессиональные камеры, объективы и
                  осветители. Ваш продукт просвечиваем в инфракрасном спектре, поэтому не упускаем ни один дефект!</div>
              </div>
            </li>
          </ul>
          <ul class="technologies__list technologies__list--second">
            <li class="technologies__item"><img class="technologies__image revealator-slidedown"
                src="img/technologies/technologies-3.jpg" alt="Фотография инновационных технологий">
              <div class="technologies__details">
                <h3 class="technologies__name">Бережная сортировка без потерь</h3>
                <div class="technologies__descriptions">
                  <ul>
                    <li>Эжекторы с запатентованной конструкцией не повреждают продукт</li>
                    <li>Поток воздуха направляется в самый центр дефекта! Очистка от примесей происходит более плавно
                    </li>
                    <li>Широкий вибролоток, щадящая поверхность лотка и ленты. Не допускаем повреждений хрупких
                      материалов</li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="profit">
      <div class="container">
        <h2 class="profit__title title revealator-slideup">Зарабатывайте больше<br>на идеально чистом продукте</h2>
        <p class="profit__subtitle subtitle">Чистим сырье до 99,99%, сохраняем объем годного продукта</p>
        <ul class="profit__list">
          <li class="profit__item"><img class="profit__image revealator-slideup revealator-delay"
              src="img/profit/profit-1.jpg" alt="Картинка преимущества">
            <div class="profit__wrapper">
              <h3 class="profit__name">Полезные продукты – здоровое питание</h3>
              <p class="profit__description">Наши оптические сортировщики и инспекционное оборудование гарантируют
                безопасность продуктов питания благодаря новейшим технологиям интеллектуальной сортировки и очистки
                продуктов от вредных и опасных примесей.</p>
            </div>
          </li>
          <li class="profit__item"><img class="profit__image revealator-slideright revealator-delay"
              src="img/profit/profit-2.jpg" alt="Картинка преимущества">
            <div class="profit__wrapper">
              <h3 class="profit__name">Экологически чистое производство и переработка пластика</h3>
              <p class="profit__description">Оборудование Сапсан и Meyer разделяет пластик и полимеры по видам, это
                важно для дальнейшей переработки сырья и его термической обработки.</p>
            </div>
          </li>
          <li class="profit__item"><img class="profit__image revealator-slideleft revealator-delay"
              src="img/profit/profit-3.jpg" alt="Картинка преимущества">
            <div class="profit__wrapper">
              <h3 class="profit__name">Репутация и конкурентоспособность производителя</h3>
              <p class="profit__description">Чистота и качество продукта влияет на оценку потребителя, продукт с
                хорошими внешними и физическими свойствами всегда пользуется высоким спросом.</p>
            </div>
          </li>
          <li class="profit__item"><img class="profit__image revealator-slideleft revealator-delay"
              src="img/profit/profit-4.jpg" alt="Картинка преимущества">
            <div class="profit__wrapper">
              <h3 class="profit__name">Экспортное качество продукта</h3>
              <p class="profit__description">Только фотосепараторы Сапсан и Meyer способны довести сырье до экспортного
                качества с финальной засоренностью не более 1%.</p>
            </div>
          </li>
          <li class="profit__item"><img class="profit__image revealator-slideright revealator-delay"
              src="img/profit/profit-5.jpg" alt="Картинка преимущества">
            <div class="profit__wrapper">
              <h3 class="profit__name">Высокая добавленная стоимость</h3>
              <p class="profit__description">Благодаря услугам сортировки представители бизнеса выигрывают на разнице
                покупной цены исходного сырья и цены продукта для конечного потребителя.</p>
            </div>
          </li>
          <li class="profit__item"><img class="profit__image revealator-slideup revealator-delay"
              src="img/profit/profit-6.jpg" alt="Картинка преимущества">
            <div class="profit__wrapper">
              <h3 class="profit__name">Автоматизация ручного труда</h3>
              <p class="profit__description">Сортировка на фотосепараторе снижает трудозатраты и экономит ваше время.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="sale" id="sale">
      <div class="container"><span class="sale__title title revealator-slideup">Предоставляем<br>скидки за большой объем
          сортировки – от 300 тонн</span>
        <p class="sale__subtitle revealator-slidedown">Для постоянных клиентов действуют персональные предложения</p>
        <p class="sale__subtitle revealator-slideleft">Гибкая ценовая политика компании «Формулы Сортировки», а также
          продуманная система скидок и корректировки цен в условиях изменения конъюнктуры рынка, позволяют нам
          предложить конкурентоспособные цены нашим постоянным клиентам и новым заказчикам.</p>
        <p class="sale__subtitle revealator-slideright">Текущие цены на всю предлагаемую продукцию и услуги Вы можете
          узнавать у менеджера или посредством запроса обратной связи.</p><span
          class="sale__min-text revealator-slidedown">* детали и условия акций уточняйте у менеджера. Контакты указаны
          на сайте.</span>
      </div>
    </section>
    <section class="test">
      <div class="container">
        <div class="test__info">
          <h2 class="test__title title title--two revealator-slideup">Испытания – бесплатно</h2>
          <div class="test__description"><b>Хотите оценить качество сортировки?</b><br>
            <p>Можем провести пробную сортировку вашего продукта. Лично в вашем присутствии, направим протокол испытаний
              или видеоотчет. Если вы не можете приехать - просто вышлите нам тестовую партию вашего продукта. Протокол
              испытаний и видео отчет отправим на почту. Быстро, удобно и дистанционно.</p>
          </div><a class="test__button button" href="#contact-form" onclick="slowScroll('#contact-form')">Оставить
            заявку</a>
        </div>
      </div>
    </section>
    <section class="steps" id="steps">
      <div class="container">
        <h2 class="steps__title title--two revealator-slideup">Как мы работаем</h2>
        <p class="steps__text">Обеспечиваем полный цикл услуг от логистики до сортировки сырья. Профессиональная служба
          сервиса работает 24/7</p>
        <div class="steps__wrapper">
          <ol class="steps__list revealator-slidedown">
            <li class="steps__item" rel="step1">
              <h3 class="steps__name">Заявка</h3>
              <p class="steps__details">Оставьте заявку. С вами свяжется специалист для уточнения деталей</p>
            </li>
            <li class="steps__item" rel="step2">
              <h3 class="steps__name">Расчет стоимости</h3>
              <p class="steps__details">Рассчитываем стоимость сепарации в зависимости от загрязненности и нужной вам
                чистоты</p>
            </li>
            <li class="steps__item" rel="step3">
              <h3 class="steps__name">Испытания – бесплатно</h3>
              <p class="steps__details">Хотите оценить качество сортировки? Можем провести пробную сортировку вашего
                продукта. Лично в вашем присутствии, направим протокол испытаний или видеоотчет</p>
            </li>
            <li class="steps__item" rel="step4">
              <h3 class="steps__name">Договор</h3>
              <p class="steps__details">Заключаем договор.</p>
            </li>
            <li class="steps__item" rel="step5">
              <h3 class="steps__name">Чистый продукт</h3>
              <p class="steps__details">Получаем ваше сырье. Настраиваем очистку по заданным параметрам. Отгружаем вам
                продукт с чистотой до 99,99%</p>
            </li>
          </ol>
          <div class="steps__photo">
            <ul class="steps__photo-list">
              <li class="steps__photo-item" id="step1"><img class="steps__image" src="img/background/st1.jpg"
                  alt="шаг 1"></li>
              <li class="steps__photo-item" id="step2"><img class="steps__image" src="img/background/st2.jpg"
                  alt="шаг 2"></li>
              <li class="steps__photo-item" id="step3"><img class="steps__image" src="img/background/st3.jpg"
                  alt="шаг 3"></li>
              <li class="steps__photo-item" id="step4"><img class="steps__image" src="img/background/st4.jpg"
                  alt="шаг 4"></li>
              <li class="steps__photo-item" id="step5"><img class="steps__image" src="img/background/st5.jpg"
                  alt="шаг 5"></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="form" id="contact-form">
      <div class="container">
        <h2 class="form__title title--two">Форма обратной связи</h2>
        <form class="write-us__form" method="post"><input type="hidden" name="subject" value="Форма обратной связи">
          <input type="checkbox" name="agree" value="1" checked="checked" class="agree">
          <div class="form__wrapper">
            <p class="form__item"><label class="form__label" for="write-us-name">Ваше имя:</label> <input
                class="write-us__input" name="name" id="write-us-name" type="text" placeholder="Имя Фамилия" required=""
                autocomplete="off"></p>
            <p class="form__item"><label class="form__label" for="write-us-phone">Ваш телефон:</label> <input
                class="write-us__input phone" name="phone" id="write-us-phone" type="tel" placeholder="+7 918 089 99 98"
                required="" autocomplete="off"></p>
            <p class="form__item"><label class="form__label" for="write-us-email">Ваш e-mail:</label> <input
                class="write-us__input" name="email" id="write-us-email" type="email" placeholder="email@example.com"
                required="" autocomplete="off"></p>
            <p class="form__item"><label class="form__label" for="write-us-message">Текст письма:</label> <textarea
                class="write-us__input--text" name="message" id="write-us-message" cols="30"
                rows="4">В свободной форме</textarea></p>
          </div><button class="write-us__button button" type="submit">Отправить</button>
        </form>
      </div>
    </section>
  </main>
  <footer class="footer" id="contacts">
    <div class="container">
      <ul class="footer__list one">
        <li class="footer__item"><img src="img/logotype--white.png" alt="" width="174" height="34"> <span
            class="footer__logo-description">Сортировка пищевой продукции и вторсырья</span></li>
        <li class="footer__item">
          <h4 class="footer__title">Контакты</h4>
          <ul class="footer__details-item">
            <li>Сотовый: 8 (980) 555-58-55</li>
            <li>Стационарный: 8 (905) 655-22-57</li>
            <li>Сотовый в Краснодаре: 8 (920) 428-42-24</li>
            <li>Электронная почта: info@formulasort.ru</li>
          </ul>
        </li>
        <li class="footer__item">
          <h4 class="footer__title">Адрес</h4>
          <ul class="footer__details-item">
            <li>Сортировка в Воронеже: 394014, Воронежская область, город Воронеж, улица Лебедева, 10
            </li>
            <li>Сортировка в Краснодаре: 350010, Краснодарский край, город Краснодар, улица ул. Ростовское шоссе, 74/4</li>
          </ul>
        </li>
        <li class="footer__item">
          <h4 class="footer__title">Дополнительно</h4>
          <ul class="footer__details-item">
            <li><a href="https://formulasort.ru/konfidencialnost.html">Конфиденциальность</a></li>
            <li><a href="/organization-card.pdf" target="_blank">Карточка организации</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </footer>
  <div class="developers">
    <div class="container">
      <div class="developers__wrapper">
        <p class="developers__text">© 2019-2020 ООО «Формула сортировки». Предоставление услуг сортировки. Любое
          копирование материалов сайта без указания источника запрещено согласно 4ч, раздел 7 Гражданского Кодекса РФ.
        </p><a class="developers__link" href="https://t.me/Yuriy_Ronin">Разработано: Юрием Савченко</a>
      </div>
    </div>
  </div><!-- Модалка заказ звонка  -->
  <section class="modal modal-callback modal-container overlay_popup" id="callback-top">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Заказ звонка</h2>
            <form class="write-us__form" action="" method="post"><input type="hidden" name="subject"
                value="Заказать звонок"> <input type="checkbox" name="agree" value="1" checked="checked" class="agree">
              <div class="modal__container">
                <p class="modal__item-wrapper"><label class="write-us__label" for="modal-write-us-name">Ваше
                    имя:</label> <input class="write-us__input" name="name" id="modal-write-us-name" type="text"
                    placeholder="Имя Фамилия" required="" autocomplete="off"></p>
                <p class="modal__item-wrapper"><label class="write-us__label" for="modal-write-us-phone">Ваш
                    телефон:</label> <input class="write-us__input phone" name="phone" id="modal-write-us-phone"
                    type="tel" placeholder="" required="" autocomplete="off"></p>
              </div><button class="write-us__button button" type="submit">Заказать звонок</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- Модалки с группами продуктов  -->
  <!-- Сельское хозяйство  -->
  <section class="modal modal-container overlay_popup" id="agriculture-1">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Зерновые культуры</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Пшеница</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Овес</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Ячмень</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кукуруза</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Рис</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Тритикале</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Полба</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/1/1-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Рожь</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="agriculture-2">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Мелкосемянные и масличные культуры</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Амарант</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Рапс</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Сорго</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Горчица</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Лен</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кунжут</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Рыжик</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/2/2-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Тимофеевка</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="agriculture-3">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Бобовые культуры</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Фасоль</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Чечевица</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Горох</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Соя</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Вика</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Люпин</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Нут</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/3/3-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Маш</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="agriculture-4">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Крупы</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Гречневая</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Перловая</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Ячменная</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Пшеничная</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Пшенная</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Рисовая</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кукурузная</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/agriculture/4/4-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Овсяная</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- Пищевая промышленность  -->
  <section class="modal modal-container overlay_popup" id="food-industry-1">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Орехи</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Фундук</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Миндаль</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Фисташка</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Арахис</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кешью</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Грецкий орех</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кедровый орех</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/1/1-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Пекан</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-2">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Замороженные продукты</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Клюква</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Черника</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Малина</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Ежевика</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Смородина</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Клубника</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Горошек</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/2/2-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кукуруза</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-3">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Сушеные овощи и фрукты</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Яблоки</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Курага</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Чернослив</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Изюм</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Инжир</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Финики</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Шиповник</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Вишня</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-9.jpg"
                    alt="Картинка продукта"> <span class="products__name">Свекла</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-10.jpg"
                    alt="Картинка продукта"> <span class="products__name">Перец</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-11.jpg"
                    alt="Картинка продукта"> <span class="products__name">Морковь</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/3/3-12.jpg"
                    alt="Картинка продукта"> <span class="products__name">Томаты</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-4">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Морепродукты</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/4/4-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Креветки</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/4/4-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Мидии</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/4/4-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кальмары</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/4/4-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Замороженная рыба</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-5">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Консервы и полуфабрикаты</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/5/5-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Пельмени</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/5/5-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Вареники</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/5/5-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Рыбные и мясные консервы</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/5/5-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Порошковое молоко и детское питание</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-6">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Кофе, чай</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/6/6-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Зеленый кофе</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/6/6-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Обжаренный кофе</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/6/6-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Зеленый чай</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/6/6-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Черный чай</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-7">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Специи</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Майоран</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Лавровый лист</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Розмарин</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Шафран</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Орегано</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Тмин</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Гвоздика</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/7/7-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Перец молотый</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="food-industry-8">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Снэки</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Семечки</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Сухарики</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Чипсы</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Попкорн</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Хлопья и готовые завтраки</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Картошка фри</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-7.jpg"
                    alt="Картинка продукта"> <span class="products__name">Кукурузные палочки</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/food-industry/8/8-8.jpg"
                    alt="Картинка продукта"> <span class="products__name">Каштаны</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- Вторсырьё  -->
  <section class="modal modal-container overlay_popup" id="recycling-1">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Пластик</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/1/1-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">ПЭТ флекс и гранулы</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/1/1-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">ПВХ</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/1/1-3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Полипропилен</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/1/1-4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Полистирол</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/1/1-5.jpg"
                    alt="Картинка продукта"> <span class="products__name">АБС</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/1/1-6.jpg"
                    alt="Картинка продукта"> <span class="products__name">Полиэтилен низкой и высокой плотности</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="recycling-2">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Пластмассы</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/2/2-1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Поликарбонат</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/2/2-2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Полиамид</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="recycling-3">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Стеклобой</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/3/1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Цветное стекло</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/3/2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Мутное и прозрачное стекло</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/3/3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Крупные и мелкие фракции</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/3/4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Стекло и керамика</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/3/5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Стекло и камни</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="modal modal-container overlay_popup" id="recycling-4">
    <div class="modal-container__container">
      <div class="modal-container__wrapper">
        <div class="my-modal">
          <div class="my-modal__close close-popup"></div>
          <div class="my-modal__block">
            <h2 class="title title--two">Бумага и картон</h2>
            <ul class="products__list">
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/4/1.jpg"
                    alt="Картинка продукта"> <span class="products__name">Газетная бумага</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/4/2.jpg"
                    alt="Картинка продукта"> <span class="products__name">Офсетная бумага</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/4/3.jpg"
                    alt="Картинка продукта"> <span class="products__name">Картон</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/4/4.jpg"
                    alt="Картинка продукта"> <span class="products__name">Цветная бумага</span></div>
              </li>
              <li class="products__item">
                <div class="products__wrapper"><img class="products__image" src="img/products/recycling/4/5.jpg"
                    alt="Картинка продукта"> <span class="products__name">Белая бумага</span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section><!-- BEGIN CONVERSUS -->
  <script type="text/javascript">
  (function(i, s, o, g, a, m) {
    i["PVWatcherObj"] = {
      id: 4420,
      ver: 1.01
    };

    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g + "?" + (new Date).getTime();
    m.parentNode.insertBefore(a, m)
  })(window, document, "script", "//lk.conversus.pro/smartvoronka/watcher-prod/pv.temporary.js");
  </script><!-- END CONVERSUS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/fm.revealator.jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
  <script language="javascript">
  var x = document.getElementsByClassName("agree");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].checked = false;
  }
  </script>
</body>

</html>