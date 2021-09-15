$(document).ready(function(){   
    $('.load-page').fadeOut(1700);

        // hamburger
        let btn = document.querySelector('.hamburger');
        btn.addEventListener('click',function(){
            document.querySelector('.menu-mobile').classList.toggle('active');
        });
        // hambuger
        const menuBtn = document.querySelector('.hamburger');
        let menuOpen = false;
        menuBtn.addEventListener('click', () => {
            if(!menuOpen){
                menuBtn.classList.add('open');
                menuOpen = true;
            }
            else{
                menuBtn.classList.remove('open');
                menuOpen = false;
            }
        });
});
