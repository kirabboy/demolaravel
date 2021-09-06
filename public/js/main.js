$(document).ready(function(){   
    $('.load-page').fadeOut(1700);
});

// $(window).scroll(function(){
//     var scroll = $(window).scrollTop(),
//     dh = $(document).height(),
//     wh = $(window).height(),
//     scrollPercent = (scroll / (dh-wh)) * 100;
//     $('#progressbar').css("height", scrollPercent + '%');
// }) 
let progress = document.getElementById("progressbar");
let totalHeight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%"

}