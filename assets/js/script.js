$(document).ready(function () {

  //  Fancybox
  $(".fancybox").fancybox({
    maxWidth:500,
    maxHeight:600,
    fitToView:false,
    width:'70%',
    height:'70%',
    autoSize:false,
    closeClick:false,
    openEffect:'fade',
    closeEffect:'none',
    openSpeed:'fast'
  });
  $("a#inline").fancybox({
    'hideOnContentClick':true
  });
  $("#single_1").fancybox();
  $("#conditions").hide();

});