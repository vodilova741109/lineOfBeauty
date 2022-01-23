@extends('layouts.main')

@section('title',$item->title)


 @section('content')


 <main>
 <div class="courses__head">
        <h2 class="courses__title">{{$item->title}}</h2>
 </div>
 <section class="current__card_container">
 <div class="courses__slider-item">
        <img src="/images/{{$card_route}}/{{$item->image}}" alt="course image">
        <p class="courses__slider-upper-time">{{$item->quantity_hours}}</p>
        <h3 class="courses__slider-upper-name">{{$item->title}}</h3>
        <p class="courses__slider-category">{{$item->subtitle}}</p>
        <div class='price__container'>
          <div class="price__wrapper">
            <p class="price__full">{{$item->price}}</p>
            <p class="price__discount">{{$item->price_with_discount}} </p>
          </div>
          <a href="/contacts/#form_contact"><a href="/contacts/#form_contact"><button class="courses__slider_button">записаться</button></a></a>
        </div>
      </div>
      <ul class="current-card__text">{!! $item->description !!}</ul>
 </section>
</main>

@endsection
