@extends('layouts.main') 

@section('title','Курсы Парикмахеров')

@section('content')
<section class="contacts-page__container">
<div class="contacts-page__text">
  <p><span>Адрес:</span> г. Санкт-Петербург, ул. Съезжинская, д. 37</p>
  <p><span>Метро:</span> станции метро «Горьковская» и «Спортивная»</p>
  <a href="tel:+78122324942" class="contacts-page__link"><span> Телефон студии:</span>+7 (812) 232-49-42</p>
  <a href="mailto:studia@linia-krasoty.ru" class="contacts-page__link"><span> Email:</span>studia@linia-krasoty.ru</p>
  <p><span>Время работы:</span> с понедельника по пятницу с 10:00 до 18:00</p>
  <a href="tel:+78129858569" class="contacts-page__link"><span> Телефон горячей линии:</span>+7 (812) 985-85-69</a>
</div>
<img src="images/contacts/door.png" alt="картинка студии" class="contacts-page__image">
<img src="images/contacts/studio.png" alt="картинка студии"  class="contacts__image">
</section> 
<div class="colored-divider"></div>
<div class="courses__head">
        <h2 class="courses__title">Остались вопросы?</h2>      
</div>
<div class="form-page__wrapper">
  <h3 class="form-page__title">Вы можете задать нам вопрос или записаться на посещение студии прямо сейчас! Мы свяжемся с Вами в ближайшее время. </h3>
  <form id="form_contact" action="" class="form-page__container" name="main_form">
    <input type="text" placeholder="Ваше имя" class="form__input">
    <input type="text" placeholder="Ваш телефон" class="form__input">
    <input type="text" placeholder="Наименование курса" class="form__input">
    <input type="text" placeholder="Ваш вопрос" class="form__input">
    <div class="form__buttons">
      <label class="form__checkbox">
        <input type="checkbox" name="" id="" checked>
        <p>Я подтверждаю, что ознакомлен с <a href="/">политикой конфиденциальности</a></p>
      </label>
      <button type="submit" class="button__submit">Отправить</button>
    </div>
  </form>
</div>
<div class="maps__container">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aae34a133a3a71a369eaeed4af680dd63836f42647ade3c7476b445108fa1add4&amp;width=100%25&amp;height=463&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
@endsection