/*var swiper = new Swiper('.swiper-container--index-page', {
    pagination: {
        el: '.swiper-pagination',
        //dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    /!*autoplay: {
        delay: 3000,
    },*!/
    loop: true
});*/
var swiper = new Swiper('.index-photo-gallery', {
    effect: 'coverflow',
    grabCursor: true,
    //centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
    },
    pagination: {
        el: '.swiper-pagination',
    },
    autoplay: {
        delay: 3000,
    },
    loop: true
});