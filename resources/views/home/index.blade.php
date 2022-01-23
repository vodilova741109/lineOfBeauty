@extends('layouts.main')

@section('title','Линия Красоты')


 @section('content')

 <main>
  <section class="preferences">
    <div class="preferences__card">
      <div class="preferences__number">
        <img src="images/number1.svg" alt="">
      </div>
      <h2 class="preferences__title">Современное обучение</h2>
      <p class="preferences__text">
      Программы наших курсов отвечают стандартам образовательной системы, классы оснащены профессиональным оборудованием
      </p>
    </div>
    <div class="preferences__card">
      <div class="preferences__number">
      <img src="images/number2.svg" alt="">
        <!-- <p class="preferences__number_item">2</p> -->
      </div>
      <h2 class="preferences__title">ПРАКТИЧЕСКИЕ ЗАНЯТИЯ</h2>
      <p class="preferences__text">
      80% времени - это практическая часть наших занятий. Все курсы ведут специалисты с опытом более 10-15 лет. Полученные навыки вы будете отрабатывать на реальных моделях
      </p>
    </div>
    <div class="preferences__card">
      <div class="preferences__number">
      <img src="images/number3.svg" alt="">
        <!-- <p class="preferences__number_item">3</p> -->
      </div>
      <h2 class="preferences__title">Доступные цены и гибкая система оплаты</h2>
      <p class="preferences__text">
      Мы постоянно проводим мониторинг цен по всем направлениям нашей школы и формируем лучшее предложение
      </p>
    </div>
  </section>
  <section class="courses">
    <div class="courses__head">
      <h2 class="courses__title">Наши Курсы </h2>
    </div>
    <div class="courses__grid">
    <a href="/cosmetolog"><img src="images/courses_img1.png" alt="" class="courses__grid-image"></a>
        <div class="courses__grid-text-item">
          <h3 class="courses__card_title">Курсы косметологов</h3>
          <ul class="courses__list">
            <li class="courses__list-item">Специалист эстечиской косметологии</li>
            <li class="courses__list-item">Курс выходного дня - Косметик-эстетист 4 квалиф. уровня</li>
            <li class="courses__list-item">Косметик-эстетист 4 квалиф. уровня</li>
          </ul>
        </div>

        <a href="/haircutter"><img src="images/courses_img2.png" alt="" class="courses__grid-image"></a>
        <div class="courses__grid-text-item">
          <h3 class="courses__card_title">Курсы парикмахеров</h3>
          <ul class="courses__list">
            <li class="courses__list-item">Специалист парикмахерского искусства</li>
            <li class="courses__list-item">Парикмахер универсал 4 квалиф. уровня</li>
            <li class="courses__list-item">Парикмахер-универсал 5 квалиф. уровня</li>
          </ul>
        </div>
        <a href="/vizaje"><img src="images/courses_img3.png" alt="" class="courses__grid-image"></a>
        <div class="courses__grid-text-item">
          <h3 class="courses__card_title">Курсы визажистов</h3>
          <ul class="courses__list">
            <li class="courses__list-item">Курс Визажист-стилист</li>
            <li class="courses__list-item">Визаж. Экспресс-курс</li>
            <li class="courses__list-item">Курс «Макияж для себя»</li>
          </ul>
        </div>
        <a href="/manicure"><img src="images/courses_img4.png" alt="" class="courses__grid-image"></a>
        <div class="courses__grid-text-item">
          <h3 class="courses__card_title">Мастеров маникюра</h3>
          <ul class="courses__list">
            <li class="courses__list-item">Базовый курс “Быстрый старт”</li>
            <li class="courses__list-item">Курс салонный мастер</li>
            <li class="courses__list-item">Косметик-эстетист 4 квалиф. уровня</li>
            <li class="courses__list-item">Специалист по ногтевому сервису</li>
          </ul>
        </div>
        <a href="#"><img src="images/courses_img5.png" alt="" class="courses__grid-image"></a>
        <div class="courses__grid-text-item">
          <h3 class="courses__card_title">Семинары для</h3>
          <ul class="courses__list">
            <li class="courses__list-item">Косметологов</li>
            <li class="courses__list-item">Парикмахеров</li>
            <li class="courses__list-item">Мастеров маникюра</li>
            <li class="courses__list-item">Визажистов</li>
          </ul>
        </div>
    </div>
  </section>
  <section class="education">
    <div class="courses__head">
        <h2 class="courses__title">Преимущества нашей учебной студии</h2>
    </div>
    <ul class="education__list">
      <li class="education__item">
        <img src="images/education_icons/edu1.png" alt="" class="education__item-img">
        <p class="education__itme-text"> Имеем лицензию на образовательную деятельность
        </p>
      </li>
      <li class="education__item">
        <img src="images/education_icons/edu2.png" alt="" class="education__item-img">
        <p class="education__itme-text">Обучение в мини-группах 3-7 человек
        </p>
      </li>
      <li class="education__item">
        <img src="images/education_icons/edu3.png" alt="" class="education__item-img">
        <p class="education__itme-text">Преподаватели - профессионалы, в том числе Чемпионы мира, Европы, судьи международных категорий
        </p>
      </li>
      <li class="education__item">
        <img src="images/education_icons/edu4.png" alt="" class="education__item-img">
        <p class="education__itme-text">Успешно обучаем с 2004 года</p>
      </li>
      <li class="education__item">
        <img src="images/education_icons/edu5.png" alt="" class="education__item-img">
        <p class="education__itme-text">Все занятия на реальных моделях</p>
      </li>
      <li class="education__item">
       <img src="images/education_icons/edu6.png" alt="" class="education__item-img">
       <p class="education__itme-text">Закрытая база с вакансиями для выпускников</p>
     </li>
     <li class="education__item">
       <img src="images/education_icons/edu7.png" alt="" class="education__item-img">
       <p class="education__itme-text">Практика- с первых дней обучения (большое количество часов)

       </p>
      </li>
      <li class="education__item">
        <img src="images/education_icons/edu8.png" alt="" class="education__item-img">
        <p class="education__itme-text">
          Материалы на время обучения – БЕСПЛАТНО</p>
      </li>
      <li class="education__item">
       <img src="images/education_icons/edu9.png" alt="" class="education__item-img">
        <p class="education__itme-text"> Программы обучения постоянно обновляются, чтобы соответствовать требованиям современного рынка</p>
      </li>
      <li class="education__item">
        <img src="images/education_icons/edu10.png" alt="" class="education__item-img">
        <p class="education__itme-text">Данные о выдаваемых документах вносятся в Федеральный реестр сведений документов об образовании и (или) о квалификации, документах об обучении
        </p>
      </li>
    </ul>
  </section>
  <section class="courses-slider">
    <div class="courses__head">
        <h2 class="courses__title">Выбери свой курс </h2>
    </div>
    <div class="courses__slider-grid">
      @foreach($courses as $course)
      <div class="courses__slider-item">
      <a href="/courses/{{$course->id}}" target="_blank" class="courses__slider_link">
        <img src="images/courses_img/{{$course->image}}" alt="course image">
        <p class="courses__slider-upper-title">курс</p>
        <p class="courses__slider-upper-time">{{$course->quantity_hours}}</p>
        <h3 class="courses__slider-upper-name">{{$course->title}}</h3>
        <p class="courses__slider-category">{{$course->subtitle}}</p>
        <div class='price__container'>
          <div class="price__wrapper">
            <p class="price__full">{{$course->price}}</p>
            <p class="price__discount">{{$course->price_with_discount}} </p>
          </div>
          <a href="/contacts/#form_contact"><button class="courses__slider_button">записаться</button></a>
        </div>
</a>
      </div>
      @endforeach
    </div>

  </section>
  <section class="licenses">
    <div class="courses__head">
        <h2 class="courses__title">Лицензия</h2>
    </div>
    <div class="licenses-wrapper">
      <img src="images/license.png" alt="лицензия" class="licenses__img">
      <div class="licenses__content">
        <h2 class="licenses__title">№1938 Комитет по образованию
            город Санкт-Петербург.</h2>
        <div class="divider"></div>
        <div class="licenses__text-container">
          <p class="licenses__text">Учащиеся и выпускники учебной студии «Линия Красоты» принимают участие в различных конкурсах, выставках, презентациях различных проектов, где не редко занимают призовые места</p>
          <p class="licenses__text">Учебная студия «Линия Красоты» постоянно находится под заслуженным вниманием со стороны ведущих салонов красоты, наших конкурентов, организаторов чемпионатов и конкурсов и мы делаем, и будем делать всё для дальнейшего развития и совершенствования системы обучения по такому нужному, интересному и востребованному направлению, как Красота.</p>
        </div>
      </div>

    </div>
  </section>
  <section class="reviews">
    <div class="courses__head">
        <h2 class="courses__title">Отзывы </h2>
    </div>
  </section>

</main>

 @endsection
