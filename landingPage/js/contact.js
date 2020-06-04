window.addEventListener('DOMContentLoaded',function(){
    //start

    var burger = document.querySelector('header .burger');
    var nav = document.querySelector('header nav');
    var fig = document.querySelector('.left_con figure');
    var leftCon = document.querySelector('.left_con');
    var rightCon = document.querySelector('.right_con');
    var foot = document.querySelector('footer');
    var navA = document.querySelectorAll('nav ul li a');
    var figImg = document.querySelector('.left_con figure img');
    var figText = document.querySelector('.left_con figure figcaption');
    
        window.addEventListener('load',function(){
            setTimeout(function(){
                objActive();
            },100)   
        });
        function objActive(){
            leftCon.classList.add('active');
            rightCon.classList.add('active');
            foot.classList.add('active');
            burger.classList.add('active');
            fig.classList.add('active');
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
        });
        
        // nav 클릭시 페이지 이동
        for(var n=0; n < navA.length; n++){
            navA[n].addEventListener('click',function(e){
                e.preventDefault();
                var nP = this.href;
                nextPage();
                setTimeout(function(){
                    location.href = nP
                },1200)
            })
        }

        function nextPage(){
            nav.classList.remove('block');
            nav.classList.remove('show');
            burger.classList.remove('show');
            burger.classList.remove('active')
            fig.classList.remove('active');
            fig.style.opacity = 0;
            
            setTimeout(function(){
            leftCon.classList.remove('active');
            rightCon.classList.remove('active');
            foot.classList.remove('active');
            },500)
        }
    //end
})