/* Прогресс бар в шапке сайта  */
var progress = document.querySelector('.progress-bar');

window.addEventListener('scroll', progressBar);

function progressBar(e) {
	var windowScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var result = windowScroll / windowHeight * 100;

	progress.style.width = result + '%';
}

/* Плавная прокрутка по якорям в меню к выбранным блокам  */
function slowScroll(id) {
	var offset = 0;
	$('html, body').animate({
		scrollTop: $(id).offset().top - offset
	}, 1000);

	return false;
}

/* Бургер меню  */
$(document).ready(function() {
	$('#nav-icon').click(function() {
		$(this).toggleClass('open');
	});
});

$('body').on('click', 'button.header__burger', function() {

	$('.header__navigation').toggleClass('header__navigation_mobile');

	return false;
});

$(document).ready(function() {
	var mySwiper = new Swiper('.slider-top', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		effect: 'fade',
		autoplay: {
			delay: 3200,
		},
	});

	//Модалка
	$('.show_popup').click(function() {
		var popup_id = $('#' + $(this).attr('rel'));
		$(popup_id).show();
		$(popup_id).find('.my-modal').addClass('modal-open');
		$('html').addClass('none-scroll');
		return false;
	});
	$('.close-popup').click(function() {
		$(this).closest('.my-modal').removeClass('modal-open');
		$(this).closest('.modal-container').hide();
		$('html').removeClass('none-scroll');
	});

	$(document).mouseup(function(e) {
		// событие клика по веб-документу
		var modalOpen = $('.modal-open'); // тут указываем ID элемента
		if (!modalOpen.is(e.target) && // если клик был не по нашему блоку
			modalOpen.has(e.target).length === 0
		) {
			// и не по его дочерним элементам
			modalOpen.closest('.modal-container').hide();
			$('html').removeClass('none-scroll');
		}
	});

	/* Шаги в нижних блоках сайта  */
	$('.steps__item').mouseenter(function() {
		var stepId = $('#' + $(this).attr('rel'));
		$('.steps__photo-item').hide();
		$(stepId).show();
	});

	$(".video-gallery__item").mouseenter(function() {
		var videoThis = $(this).find('.video-gallery__video')[0];
		videoThis.play();
	});

	$(".video-gallery__item").mouseleave(function() {
		var videoThis = $(this).find('.video-gallery__video')[0];
		videoThis.pause();
	});

});

/* табы в подвале */
$(document).ready(function() {
	$('.footer__title').click(function(event) {
		if ($('.footer__list').hasClass('one')) {
			$('.footer__title').not($(this)).removeClass('active');
			$('.footer__details-item').not($(this).next()).slideUp(300);
		}
		$(this).toggleClass('active').next().slideToggle(300);
	});
});

/* Мишка  */
$(".phone").mask("9 (999) 999-9999");


$('form button[type="submit"]').on('click', function() {
	var form = $(this).closest('form');

	if (form.valid()) {
		var msg = form.serializeArray();

		$.ajax({
			dataType: 'json',
			url: '/api/send.php',
			type: 'post',
			data: $.param(msg),
			success: function(data) {
				if (data.status != 'error') {
					resetForm();
					window.location.href = "/thanks.html";
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {

			}
		});

	}
	return false;
});

function resetForm() {
	// чистим все формы после закрытия модалки
	$('form').each(function() {
		$(this)[0].reset();
	});
}
