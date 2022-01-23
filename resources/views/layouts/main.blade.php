<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="/styles/normalize.css">
  <link rel="stylesheet" href="/styles/style.css">

  <script src="{{ asset('js/custom.js') }}" defer></script>

  <title>@yield('title')</title>
</head>
<body>
<div class="wrapper">
 <header class="header">
	 <a href="/">
	 <img src="/images/logo.png" alt="logo" class="header__logo">
	 </a>

	<div class="burger-menu">
		<input id="menu-toggle" type="checkbox" />
		<label class="menu-btn" for="menu-toggle">
		<span></span>
		</label>

		<ul class="menubox">
				<li><a class="menu-item" href="/">Курсы и семинары</a></li>
				<li><a class="menu-item" href="/about">О нас</a></li>
				<li><a class="menu-item" href="/contacts">Контакты</a></li>
				<li><a class="menu-item" href="#">Санкт-Петербург, Съезжинская 37, м.Горьковская</a></li>
				<li><a href="tel:+78129858569" class="menu-item">+7 (812) 985-85-69</a>	</li>
				<li><a href="tel:+78122324942" class="menu-item">+7 (812) 232-49-42</a></li>
		</ul>
  </div>

   <div class="header__grid">
	<div class="header__text-block">
		<p class="header__text">Санкт-Петербург, Съезжинская 37, м.Горьковская</p>
		<div class="phone">
			<a href="tel:+78129858569" class="header__tel-link"><img src="../images/mobail-icon.png" alt="">+7 (812) 985-85-69</a>
			<a href="tel:+78122324942" class="header__tel_mob-link"><img src="../images/phone-icon.png" alt="">+7 (812) 232-49-42</a>
		</div>


	</div>
  <ul class="header__nav-list">
    <li ><a href="#" id="curs" class="navigation__link">Курсы и семинары</a>

    <ul id="drop-down_menu" class="drop-down__menu">
		<li>Парикмахер</li>
		<li>Косметолог</li>
		<li>Мастер маникюра</li>
		<li>Визажист</li>
	</ul>
    <!-- <div class="bagr" id="mask">
    </div> -->



	</li>
    <li><a href="/about" class="navigation__link">О нас</a></li>
    <li><a href="/contacts" class="navigation__link">Контакты</a></li>
  </ul>
  </div>
 </header>
 <section class="top-slider">
			<div class="top-slider__content">
				<p class="top-slider__text">Обучение парикмахеров, косметологов, мастеров маникюра и визажистов</p>
				<p class="top-slider__year">с 2004 года</p>
				<h1 class="top-slider__title">МЫ УЧИМ СОЗДАВАТЬ КРАСОТУ ПРОФЕССИОНАЛЬНО!</h1>
				<a href="/contacts/#form_contact"><button class="top-slider__button">запишись на курс</button></a>
			</div>
			<img src="/images/slider-Image1.png" alt="haircut courses image" class="top-slider__image">
 </section>
 <nav class="navigation">
 <ul class="navigation_list">
 <li><a href="/haircutter">Парикмахер</a></li>
   <li><a href="/cosmetolog">Косметолог</a></li>
   <li><a href="/manicure">Мастер маникюра</a></li>
   <li><a href="/vizaje" class="">Визажист</a></li>
 </ul>
 </nav>

 @yield('content')

 <footer class="footer">
	<img src="/images/logo.png" alt="footer__logo" class="footer__logo">
	<div class="footer__content">
		<p class="footer__text">Санкт-Петербург
		Съезжинская улица, 37, м.Горьковская</p>
		<a href="mailto:studia@linia-krasoty.ru" class="footer__mail">Email: studia@linia-krasoty.ru</a>
		<ul class="footer__links">
			<li class="footer__item"><a href="#" class="footer__link"><img src="/images/social/fb.svg" alt="fb link" class="footer__image"></li>
			<li class="footer__item"><a href="#" class="footer__link"><img src="/images/social/inst.svg" alt="inst link" class="footer__image"></li>
			<li class="footer__item"><a href="#" class="footer__link"><img src="/images/social/mail.svg" alt="mail link" class="footer__image"></li>
			<li class="footer__item"><a href="#" class="footer__link"><img src="/images/social/vk.svg" alt="vk link" class="footer__image"></li>
			<li class="footer__item"><a href="#" class="footer__link"><img src="/images/social/whatsapp.svg" alt="whatsapp link" class="footer__image"></li>
		</ul>
	</div>
	<ul class="footer__phones">
			<li><a href="tel:+78129858569" class="footer__phones-link">+7 (812) 985-85-69</a></li>
			<li><a href="tel:+78122324942" class="footer__phones-link">+7 (812) 232-49-42</a></li>
			<li><a href="tel:+79052762254" class="footer__phones-link">+7 (905) 276-22-54</a></li>
		</ul>
</footer>
<div class="copyright">
	<p class="copyright__text">Copyright © 2004-2021</p>
</div>
</div>
</body>
</html>
