var output = document.getElementById('output');
var bAnswer = document.getElementsByClassName('btnAns');
var myObj = '';
    page = 0;
    crtAnswer = 0;
var myQueRep = [];
loadQuestions();
//event listeners
btnPre.onclick = function(){
    buildQuiz(page - 1)
};
btnNxt.onclick = function(){
    buildQuiz(page + 1)
};
function loadQuestions(){
    var a = new XMLHttpRequest();
    a.open( "GET", "https://api.myjson.com/bins/wqx4l", true);
    a.onreadystatechange = function () {
    if (a.readyState ==4){
        myObj = JSON.parse(a.responseText);
        buildQuiz(0);
    }
}
    a.send();    
}
function hideshow(){
    if(myObj.length <= page){
        document.getElementById('btnNxt').style.display = 'none';
    }
    else{
        document.getElementById('btnNxt').style.display = 'block';
    }
   if(0 >= page){
        document.getElementById('btnPre').style.display = 'none';
    }
    else{
        document.getElementById('btnPre').style.display = 'block';
    }
}
function buildQuiz(pg){
    console.log(page);
    console.log(myObj);
    page = pg;
    hideshow();
    if(page >= 0){
        //quiz finished
        if (myObj.length < (page +1 )){
            page = myObj.length;
            var holderHTML ='';
            var score = 0;
            var glyph = '';
            for(var item in myObj){
                if(myObj[item].correct == myQueRep[item]){
                    score++;
                    glyph = '<span class="glyphicon glyphicon-ok-circle" aria-hidden-"true"></span>';
                }else{
                    glyph = '<span class="glyphicon glyphicon-remove-circle" aria-hidden-"true"></span>';
                     }
                holderHTML += '<div class="col-sm-12">' + myObj[item].question + '  ' + myObj[item].answers[myQueRep[item]] + ' ' + glyph + ' </div> ';
             }
            output.innerHTML = '<h1> Quiz Results: You Scored <span id="score">' + score + '</span> correct </h1><div class="endScore">' + holderHTML + '</div><button onclick="quiz()">Send scores</button>';
            
            
        }else{
            var myQuestion = myObj[page].question;
            var myCorrect = myObj[page].correct;
            crtAnswer = myObj[page].answers[myCorrect];
            var questionHolder = '';
            var yesCor ='';

            for(var i in myObj[page].answers){
                var aClass = '';
                if(myObj[page].mySel == i){
                    aClass = ' selAnswer ';
                }
                if(i == myCorrect){ yesCor = '*';
                }else {
                    yesCor='';
                }
                questionHolder += '<div class="col-sm-6"><div class="btnAns' + aClass +'"data-id="' + parseInt(i) + '">' + myObj[page].answers[i] + '</div></div>';
            }
            output.innerHTML ='<div class="MyQ">' + myQuestion + ' ' +  myCorrect + '</div>';
            output.innerHTML += questionHolder;
                for(var x = 0; x < bAnswer.length; x++){
                    bAnswer[x].addEventListener('click', myAnswer, false);
                }
            console.log(bAnswer);
        }
    }
}
// this.classList.toggle('selAnswer');
function myAnswer(){
    var myResult ='';
    var iId = this.getAttribute("data-id");
    myObj[page].mySel = iId;
    if(this.innerText == crtAnswer){
        myResult = "correct";
    } else {
        myResult = "incorrect";
    }
    myQueRep[page] = iId;
     for (var x = 0; x < bAnswer.length; x++){
         console.dir(bAnswer[x]);
         if(iId == x){
             bAnswer[x].classList.add("selAnswer");
         }
            else{
             bAnswer[x].classList.remove("selAnswer");
         }
     }
    console.log(myQueRep);
   /* for(var q = 0; q < output.children.length; q++){
        console.log(output.children[q].children);
    }*/
   // console.log(myResult);
}
/*var myData = '[{"question":"what is linux","answers":["an operating system","a browser","an application","a penguin"," a programming language"],"correct":0},{"question":"what is firefox","answers":["a browser","an application","a wild dog","an operating system","a scriptin"],"correct":0}]';
var myObj = JSON.parse(myData);
for (var i in myObj){
output.innerHTML += myObj[i].question + '? <br>';
}*/
//console.log(myObj);
