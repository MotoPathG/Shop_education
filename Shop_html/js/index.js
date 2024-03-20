
$(".promotion-slider").owlCarousel({
	items:1,
	//navigation : true,
	loop:true, //Зацикливаем слайдер
	margin:0, //Отступ от картино если выводите больше 1
	nav:true, //Отключил навигацию
	autoplay:true, //Автозапуск слайдера
	smartSpeed:1000, //Время движения слайда
	autoplayTimeout:5000, //Время смены слайда
});

$(".top-slider").owlCarousel({
	loop:false, //Зацикливаем слайдер
	 //Автозапуск слайдера
	smartSpeed:1000, //Время движения слайда
	autoplayTimeout:2000, //Время смены слайда

	responsive:{ //Адаптация в зависимости от разрешения экрана
		0:{
			items:1,
			nav:false, // навигация
			autoplay:false,
			mouseDrag:true,
		},
		1000:{
			items:5,
			nav:false, // навигация
			autoplay:false,
			mouseDrag:false,
			margin:20, //Отступ от картино если выводите больше 1
		}
	}
});