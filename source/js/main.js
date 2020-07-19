var progress = document.querySelector('.progress-bar');

window.addEventListener('scroll', progressBar);

function progressBar(e) {
  var windowScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var result = windowScroll / windowHeight * 100;

  progress.style.width = result + '%';
}

function slowScroll(id) {
  var offset = 0;
  $('html, body').animate({
    scrollTop: $(id).offset().top - offset
  }, 1000);
  return false;
}
