window.addEventListener("DOMContentLoaded",function(){
    //start
    
    var leftCon = document.querySelector('.left_con');
    var rightCon = document.querySelector('.right_con');
    var foot = document.querySelector('footer');
    var rImg = document.querySelectorAll('.right_con figure img');
    var burger = document.querySelector('header .burger');
    var fig = document.querySelector('.left_con figure');
    var nav = document.querySelector('header nav');
    var lCon = document.querySelectorAll('.right_box figure');
    var lTab = document.querySelector('.right_con .tab');

    window.addEventListener("load",function(){
        setTimeout(function(){
            objActive();
        },600)
    });
    function objActive(){
        leftCon.classList.add('active');
        rightCon.classList.add('active');
        foot.classList.add('active');
        burger.classList.add('active');
        fig.classList.add('active');
        lTab.classList.add('show');
        for(var i=0;i<lCon.length;i++){
            lCon[i].classList.add('show');
        }
    }
    
    burger.addEventListener('click',function(){
        nav.classList.toggle('block');
        burger.classList.toggle('show');
        setTimeout(function(){
            showD();
        },100)
        function showD(){
            if(!nav.classList.contains('show')){
                nav.classList.add('show');
            }else{
                nav.classList.remove('show');
            }
        }
    })
    
    //end
})