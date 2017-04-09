/**
 * Created by Nastya on 28.02.2017.
 */
$(document).ready(function(){
    $('.sl').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        cssEase: 'ease-in',
        centerMode: true,
        dots: true,
        arrows: false,
        pauseOnDotsHover: true,
        slidesToShow: 3
    });
});