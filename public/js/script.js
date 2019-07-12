// トップ画像のクロスフェード切り替え
$(function(){
    var setImg = '#viewer';
    var fadeSpeed = 2000;
    var switchDelay = 5000;

    $(setImg).children('img').css({opacity:'0'});
    $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

    setInterval(function(){
        $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
    },switchDelay);
});

// ピックアップ
$(function(){
  $('table.pickup td').hover(function(){
    var idx = $(this).index() + 1
    var tds = $(this).closest('table.pickup').find('td:nth-child(' + idx + ')');
    $(this).css('background-color', '#cef1da');
    $(this).siblings().css('background', '#cef1da');
  }, function(){
    var idx = $(this).index() + 1
    var tds = $(this).closest('table.pickup').find('td:nth-child(' + idx + ')');
    $(this).css('background-color', '#FFFFFF');
    $(this).siblings().css('background', '#FFFFFF');
  });
});

// ダイアログを開く
$(function(){
  $('.open_dialog').click(function(){
    $('#dialog').fadeIn(700);
  });
});

// ダイアログを閉じる
$(function(){
  $('.close_dialog').click(function(){
    $('#dialog').fadeOut(700);
  });
});
