$(document).ready(function() {
    $(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
    $('#toTopBtn').fadeIn();
    } else {
    $('#toTopBtn').fadeOut();
    }
    });
    
    $('#toTopBtn').click(function() {
    $("html, body").animate({
    scrollTop: 0
    }, 1000);
    return false;
    });
});

const bg = document.getElementsByClassName('.bgWrapperbg');

const changeBg = () => {
    let bgrand = Math.floor(Math.random() * 4);
    switch (bgrand) {
        case 0:
        document.getElementsByClassName('bgWrapperbg')[0].style.background = "url('../images/bg1.png')";
          break;
        case 1:
        document.getElementsByClassName('bgWrapperbg')[0].style.background = "url('../images/bg2.png')";
        break;
        case 2:
        document.getElementsByClassName('bgWrapperbg')[0].style.background = "url('../images/bg3.jpg')";
          break;
        case 3:
        document.getElementsByClassName('bgWrapperbg')[0].style.background = "url('../images/bg4.png')";
            break;
        default:
          console.log(`error`);
      }
};

changeBg();