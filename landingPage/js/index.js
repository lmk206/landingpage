window.addEventListener("DOMContentLoaded",function(){
    //start
    var img = document.querySelectorAll('.visual img');
    var fig = document.querySelector('.visual figcaption');
    var copyR = document.querySelector('footer p');
    var figH1 = document.querySelector('.visual figcaption h1');
    var figP = document.querySelector('.visual figcaption p');

    console.log(img);
    window.addEventListener('load',function(){
        showT();
        setTimeout(function(){
            fadeInOut();
        },3500)
        setTimeout(function(){
            divide();
        },4000)
    })
    function divide(){
        
        setTimeout(function(){
            location.href="project.html"
        },1000)
        img[0].classList.add('left');
        img[1].classList.add('right');
    }
    function showT(){
        figH1.classList.add('show');
        figP.classList.add('show');
    }
    function fadeInOut(){
        fadeIn();
        fadeOut();
        function fadeIn(){
            copyR.style.opacity += 0.1;
            fig.style.opacity += 0.1;
            if(fig.style.opacity > 1.0 && copyR.style.opacity > 1.0){
                fig.style.opacity = 1.0;
                copyR.style.opacity = 1.0;
            }else{
                setTimeout("fadeIn(\""+fig+"\")",600);
                setTimeout("fadeIn(\""+copyR+"\")",600);
            }
        }
        function fadeOut(){
            copyR.style.opacity -= 0.1;
            fig.style.opacity -= 0.1;
            if(fig.style.opacity < 0.0 && copyR.style.opacity < 0.0){
                fig.style.opacity = 0.0;
                copyR.style.opacity = 0.0;
            }else{
                setTimeout("fadeOut(\""+fig+"\")",600);
                setTimeout("fadeOut(\""+copyR+"\")",600);
            }
        }
    }


    var data = new XMLHttpRequest();
    data.open('GET','json/project.json',true);
    data.send(null);

    // 윈도우 로드 시 json 호출
    data.addEventListener('load',function(){
        var response = JSON.parse(data.responseText);
        for(var k = 0; k<response.workPage.length; k++){
            for(var j = 0; j<response.workPage[k].length; j++){
                var imgC = document.createElement('img');
                imgC.src = response.workPage[k][j];
            }
        }
    });



    //end
})