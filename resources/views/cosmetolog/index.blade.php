@extends('layouts.main')

@section('title','Косметология')

@section('content')
 <main>
  <section class="disclaimer">
    <p class="disclaimer__text">В соответствии с приказом Министерства образования и науки Российской Федерации от 1 июля 2013 г. N 499 "Об утверждении порядка организации и осуществления образовательной деятельности по дополнительным профессиональным программам" (зарегистрирован Минюстом России 20 августа 2013 г., регистрационный N 29444), минимально допустимый срок освоения программ профессиональной переподготовки – не менее 250 часов. Данные о выдаваемых документах о дополнительном профессиональном образовании вносятся в ФИС ФРДО - Федеральный реестр сведений документов об образовании и (или) о квалификации, документах об обучении.</p>
  </section>
  <div class="colored-divider"></div>
  <section class="courses__current">
    <div class="courses__head">
        <h2 class="courses__title">Курсы Косметологии</h2>
    </div>
    <div class="slider__noscrollable">
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
      <h2 class="courses__current_title"><span>Курсы косметолога</span> рассчитаны на 3-4 месяца обучения.
        <span>За это время Вы получите:</span></h2>
        <ul class="education__list education__list-courses">
        <li class=" education__item-courses">
          <img src="images/education_icons/edu3.png" alt="" class="education__item-img">
          <p class="education__itme-text education__item-text-courses"> Теоретические и практические знания от экспертов отрасли.
            Изучите тенденции и методы работы, а также научитесь работать с реальными клиентами.</p>
        </li>
        <li class="education__item-courses">
          <img src="images/education_icons/edu1.png" alt="" class="education__item-img">
          <p class="education__itme-text education__item-text-courses"> Учебный план разработан таким образом, что после получения Диплома Вы становитесь самостоятельным специалистом с опытом практической работы.</p>
        </li>
      </ul>
  </section>
  <div class="colored-divider"></div>
  <section class="seminars">
    <div class="courses__head">
        <h2 class="courses__title">Семинары Косметологии</h2>
    </div>
    <h3 class="seminars__title">Студия <span>«Линия Красоты»</span> предлагает также экспресс курсы косметологов, где за короткое время Вы получите необходимые азы профессии косметолога.
    </h3>
    <div class="slider__noscrollable">
    @foreach($seminars as $seminar)
      <div class="courses__slider-item ">

        <img src="images/seminars/{{$seminar->image}}" alt="seminar image">
        <p class="courses__slider-upper-time">{{$seminar->quantity_hours}}</p>
        <h3 class="courses__slider-upper-name">{{$seminar->title}}</h3>
        <div class='price__container'>
          <div class="price__wrapper">
            <p class="price__discount">{{$seminar->price_with_discount}} </p>
          </div>
          <a href="/contacts/#form_contact"><button class="courses__slider_button">записаться</button></a>
        </div>

      </div>
      @endforeach
    </div>
    <div class="seminars__items">
      <div class="seminars__item">
        <img src="images/education_icons/edu2.png" alt="" class="education__item-img">
        <p class="seminars__item-text">Обучение косметологов проходят в специализированных классах, небольшими группами, что повышает качество образования каждого конкретного студента.
        </p>
      </div>
      <div class="seminars__item">
        <img src="images/education_icons/edu7.png" alt="" class="education__item-img">
        <p class="seminars__item-text">Cлушатели знакомятся с основными косметическими процедурами, массажем, получают необходимую базу знаний и практический опыт работы с самыми передовыми технологиями аппаратной косметологии. </p>
      </div>
      <div class="seminars__item">
        <img src="images/education_icons/edu9.png" alt="" class="education__item-img">
        <p class="seminars__item-text">Cлушатели знакомятся с основными косметическими процедурами, массажем, получают необходимую базу знаний и практический опыт работы с самыми передовыми технологиями аппаратной косметологии. </p>
      </div>
      <div class="seminars__item">
        <img src="images/education_icons/edu10.png" alt="" class="education__item-img">
        <p class="seminars__item-text-last">Выпускники студии являются востребованными специалистами салонов красоты Санкт-Петербурга, наша студия оказывает содействие в трудоустройстве. По окончании курсов косметологов Вы сможете работать косметологом в салонах красоты, СПА-салонах, осуществлять индивидуальную трудовую деятельность в области косметологии.
        </p>
      </div>
    </div>
  </section>
  <section class="practice">
    <div class="courses__head">
        <h2 class="courses__title">Практика в учебной студии</h2>
    </div>
  </section>
</main>
@endsection
