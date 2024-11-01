function quiz1(ques, opc, btn){
    const buttons = document.querySelectorAll('.btn1');
    buttons.forEach(button => button.disabled = true);
    
    if(ques===1 && opc===2){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}
function quiz2(ques, opc, btn){
    const buttons = document.querySelectorAll('.btn2');
    buttons.forEach(button => button.disabled = true);

    if(ques===1 && opc===3){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}
function quiz3(ques, opc, btn){
    const buttons = document.querySelectorAll('.btn3');
    buttons.forEach(button => button.disabled = true);

    if(ques===1 && opc===1){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}

