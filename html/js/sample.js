$(function () {
  $(window).scroll(function () {
    $('.fadein').each(function () {
      // ターゲット要素の高さ
      var targetElement = $(this).offset().top;
      // スクロール位置（ページの一番上からディスプレイ上端）
      var scroll = $(window).scrollTop();
      // ウィンドウの高さ
      var windowHeight = $(window).height();
      if (scroll > targetElement - windowHeight + 300) {
        $(this).css('opacity', '1');
        $(this).css('transform', 'translateY(0)');
      }
    });
  });
});
