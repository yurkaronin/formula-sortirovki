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
$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
});

$(document).ready(function () {
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
	$('.show_popup').click(function () {
		var popup_id = $('#' + $(this).attr('rel'));
		$(popup_id).show();
		$(popup_id).find('.my-modal').addClass('modal-open');
		$('html').addClass('none-scroll');
		return false;
	});
	$('.close-popup').click(function () {
		$(this).closest('.my-modal').removeClass('modal-open');
		$(this).closest('.modal-container').hide();
		$('html').removeClass('none-scroll');
	});

	$(document).mouseup(function (e) {
		// событие клика по веб-документу
		var modalOpen = $('.modal-open'); // тут указываем ID элемента
		if (
			!modalOpen.is(e.target) && // если клик был не по нашему блоку
			modalOpen.has(e.target).length === 0
		) {
			// и не по его дочерним элементам
			modalOpen.closest('.modal-container').hide();
			$('html').removeClass('none-scroll');
		}
  });

  $('.steps__item').mouseenter(function () {
    var stepId = $('#' + $(this).attr('rel'));
    $('.steps__photo-item').hide();
		$(stepId).show();
  });

  $(".video-gallery__item").mouseenter(function () {
    var videoThis = $(this).find('.video-gallery__video')[0];
    videoThis.play();
  });

  $(".video-gallery__item").mouseleave(function () {
    var videoThis = $(this).find('.video-gallery__video')[0];
    videoThis.pause();
  });

});
