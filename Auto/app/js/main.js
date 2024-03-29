jQuery( document ).ready(function( $ ) {

    /**
     * Mobile check function
     * @returns {boolean}
     */
    window.mobileAndTabletcheck = function() {
        var check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
        return check;
    };

    if ( window.mobileAndTabletcheck() ){

        console.log('mobile');

        // Убираем ограничения для высоты контейнера слайдера и overflow-y: hidden
        document.querySelector('.slider').style.height = 'auto';
        document.querySelector('.slider').style.overflow = 'auto';

    } else {

        console.log('not-mobile');

    //!!!!!!!!!!!!!!BERIN тут все что касается слайдера . И работает оно только для десктопа

        const $slider = $("#slider");
        $slider.on("init", () => {
            mouseWheel($slider);
        }).slick({
            dots: false,
            arrows: false,
            vertical: true,
            adaptiveHeight: true,
            infinite: false
        });

        $('.menu-item-12').click(function(){
            $('#slider').slick('slickGoTo', 1);
        });
        $('.menu-item-13').click(function(){
            $('#slider').slick('slickGoTo', 2);
        });



        function mouseWheel($slider) {
            $(window).on("wheel", {$slider: $slider}, mouseWheelHandler);
        }

        let countWheel = 0;

        function mouseWheelHandler(event) {

            const $slider = event.data.$slider;
            const delta = event.originalEvent.deltaY;

            if (delta > 0) {
                $slider.slick("slickNext");
                if (countWheel < 4) {
                    countWheel++;
                }

            } else {
                $slider.slick("slickPrev");
                if (countWheel > 0) {
                    countWheel--;
                }
            }

            // console.log(countWheel);
            // if (countWheel !== 0) {
            //     document.querySelector('.call').style.display = 'none';
            //     document.querySelector('.call-back').style.width = '65px';
            // } else {
            //     document.querySelector('.call').style.display = 'block';
            //     document.querySelector('.call-back').style.width = '231px';
            // }
        }


        //!!!!!!!!!!!!!!END тут все что касается слайдера . И работает оно только для десктопа
    }

    $slickElement = $("#slider");
    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var curSlide = (currentSlide ? currentSlide : 0) + 1;
        if (curSlide > 1) {
            document.querySelector('.call').style.display = 'none';
            document.querySelector('.call-back').style.width = '65px';
            document.querySelector('.call-back img').style.margin = '0';
        } else {
            document.querySelector('.call').style.display = 'block';
            document.querySelector('.call-back').style.width = '231px';
        }
        console.log('слайдер ' + curSlide + '/' + slick.slideCount);
    });


   //alert(screen.width);


// Для левой и правой панели
    $('#closeFormRight').click( function (e) {
        e.preventDefault();
        document.getElementById("sidebarRight").style.opacity = "0.1";
        document.getElementById("sidebarRight").style.right = "-509px";
    });

    $('#openFormRight').click( function (e) {
        e.preventDefault();
        document.getElementById("sidebarRight").style.opacity = "0.8";
        document.getElementById("sidebarRight").style.right = "0";
    });

    $('#closeMenuLeft').click( function (e) {
        e.preventDefault();
        document.getElementById("sidebarLeft").style.opacity = "0.1";
        document.getElementById("sidebarLeft").style.left = "-495px";
    });

    $('#openMenuLeft').click( function (e) {
        e.preventDefault();
        document.getElementById("sidebarLeft").style.opacity = "0.8";
        document.getElementById("sidebarLeft").style.left = "0";
    });
// END Для левой и правой панели



//FONT SIZE RESIZE
    function fontSize() {
        var width = 1000; // ширина, от которой идет отсчет
        var fontSize = 12; // минимальный размер шрифта
        var bodyWidth = $('html').width();
        var multiplier = bodyWidth / width;
        if ($('html').width() >= width) fontSize = Math.floor(fontSize * multiplier);
        $('body').css({fontSize: fontSize + 'px'});
    }

    $(function () {
        fontSize();
    });
    $(window).resize(function () {
        fontSize();
    });


});

//ACCORDION
var acc1 = document.getElementsByClassName("title-stage-block");
var acc2 = document.getElementsByClassName("FAQ-accordion");
var acc = [...acc1 , ...acc2];
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}