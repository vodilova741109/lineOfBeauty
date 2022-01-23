@extends('layouts.main')

@section('title','Визаж')


 @section('content')


 <main>
  <section class="disclaimer">
    <p class="disclaimer__text">В соответствии с приказом Министерства образования и науки Российской Федерации от 1 июля 2013 г. N 499 "Об утверждении порядка организации и осуществления образовательной деятельности по дополнительным профессиональным программам" (зарегистрирован Минюстом России 20 августа 2013 г., регистрационный N 29444), минимально допустимый срок освоения программ профессиональной переподготовки – не менее 250 часов. Данные о выдаваемых документах о дополнительном профессиональном образовании вносятся в ФИС ФРДО - Федеральный реестр сведений документов об образовании и (или) о квалификации, документах об обучении.</p>
  </section>
  <div class="colored-divider"></div>
  <section class="courses__current">
    <div class="courses__head">
        <h2 class="courses__title">Курсы Визажа</h2>
    </div>
    <div class="slider__noscrollable">
      @foreach($courses as $course)
      <div class="courses__slider-item ">
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
      <h2 class="courses__current_title"><span>Убедитесь, что кроме доступных цен на все курсы, вы получите ряд преимуществ:</span>
      </h2>
        <ul class="education__list education__list-courses">
        <li class=" education__item-haircutter">
          <img src="images/education_icons/edu14.png" alt="" class="education__item-img haircutter_wrapper">
          <p class="education__itme-text education__item-text-haircutter">Расходные материалы от производителя профессиональной косметики  </p>
        </li>
        <li class="education__item-haircutter">
          <img src="images/education_icons/edu15.png" alt="" class="education__item-img haircutter_wrapper">
          <p class="education__itme-text education__item-text-haircutter">Групповые занятия, обсуждения, мозговые штурмы и практические занятия.</p>
        </li>
        <li class="education__item-haircutter">
          <img src="images/education_icons/edu3.png" alt="" class="education__item-img haircutter_wrapper">
          <p class="education__itme-text education__item-text-haircutter">Мастера-учителя – практики из ведущих салонов красоты
        Санкт-Петербурга.</p>
        </li>
      </ul>
  </section>
  <div class="colored-divider"></div>
  <section class="seminars">
    <div class="courses__head">
        <h2 class="courses__title">Семинары Визажа</h2>
    </div>
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
        <img src="images/education_icons/edu13.png" alt="" class="education__item-img">
        <p class="seminars__item-text-last">Курсы обучения мастеров маникюра — выгодное вложение средств в образование, которое быстро дает реальный доход. Сразу после окончания курсов Вы будете трудоустроены в лучшие салоны Санкт-Петербурга. Для иногородних студентов — это отличная возможность начать карьеру в культурной столице России.
        </p>
      </div>
      <div class="seminars__item">
        <img src="images/education_icons/edu8.png" alt="" class="education__item-img">
        <p class="seminars__item-text">Каждому студенту мы предоставляем пакет учебных материалов. Вы получите профессиональные косметические средства для волос фирмы Ollin, одноразовые принадлежности.</p>
      </div>
      <div class="seminars__item">
        <img src="images/education_icons/edu16.png" alt="" class="education__item-img">
        <p class="seminars__item-text">Все необходимые инструменты и учебный манекен обучающиеся приобретают за свой счет.</p>
      </div>
      <div class="seminars__item">
        <img src="images/education_icons/edu11.png" alt="" class="education__item-img">
        <p class="seminars__item-text-last">После окончания обучения наш выпускник — востребованный специалист в ведущих салонах города, поскольку обладая глубокими знаниями, умело используя новейшие  технологии, он добивается успеха и уважения в индустрии красоты, получая высокий доход и профессиональное удовлетворение от своей работы.
        </p>
      </div>
    </div>
  </section>
  <div class="colored-divider"></div>
  <section class="practice">
    <div class="courses__head">
        <h2 class="courses__title">Работы наших учеников</h2>
    </div>
    <h3 class="seminars__title"><span>Повышение квалификации для парикмахеров</span></br>
      Также, для тех, кто уже работает парикмахером мы предлагаем курсы повышения квалификации парикмахеров и семинары.
      Звоните по телефону +7 (812) 232-49-42, мы подберем для Вас индивидуальную программу обучения с учетом Вашего опыта и знаний.
      Мы не просто готовим хороших специалистов, а выращиваем чемпионов мира.
      Наши ученики — наша гордость.
    </h3>
  </section>
</main>

@endsection
