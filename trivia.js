// pregunta 1 
function quiz1( opc, btn){
    const buttons = document.querySelectorAll('.btn1');
    buttons.forEach(button => button.disabled = true);
    
    if( opc===2){
       btn.setAttribute("class", "correcto");
       
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}

// pregunta 2

function quiz2(opc, btn){
    const buttons = document.querySelectorAll('.btn2');
    buttons.forEach(button => button.disabled = true);

    if(opc===3){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}
// pregunta 3
function quiz3(opc, btn){
    const buttons = document.querySelectorAll('.btn3');
    buttons.forEach(button => button.disabled = true);

    if( opc===1){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}
// Pregunta 4
function quiz4(opc, btn){
    const buttons = document.querySelectorAll('.btn4');
    buttons.forEach(button => button.disabled = true);

    if( opc===2){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}

// pregunta 5
function quiz5(opc, btn){
    const buttons = document.querySelectorAll('.btn5');
    buttons.forEach(button => button.disabled = true);

    if( opc===4){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}