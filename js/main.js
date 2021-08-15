/**
 * Typecho猫耳FM置顶插件
 *
 * @author Zero
 * @link https://github.com/MisakaTAT/GoTop
 */
$(function () {
  $(window).scroll(function () {
    var scroHei = $(window).scrollTop();
    if (scroHei > 500) {
      $(".back-to-top").css("top", "-200px");
    } else {
      $(".back-to-top").css("top", "-999px");
    }
  });
  $(".back-to-top").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      600
    );
  });
});
