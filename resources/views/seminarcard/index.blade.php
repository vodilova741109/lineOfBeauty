@extends('layouts.main')

@section('title',$seminar->title)


 @section('content')


 <main>
 <div class="courses__head">
        <h2 class="courses__title">{{$seminar->title}}</h2>
 </div>
 <section class="current__card_container">
 <div class="courses__slider-item">
        <img src="/images/{{$card_route}}/{{$item->image}}" alt="course image">
        <p class="courses__slider-upper-time">{{$seminar->quantity_hours}}</p>
        <h3 class="courses__slider-upper-name">{{$seminar->title}}</h3>
        <p class="courses__slider-category">{{$seminar->subtitle}}</p>
        <div class='price__container'>
          <div class="price__wrapper">
            <p class="price__full">{{$seminar->price}}</p>
            <p class="price__discount">{{$seminar->price_with_discount}} </p>
          </div>
          <a href="/contacts/#form_contact"><button class="courses__slider_button">записаться</button></a>
        </div>
      </div>
 </section>
</main>

@endsection
