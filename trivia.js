function quiz1(ques, opc, btn){
    if(ques===1 && opc===2){
       btn.setAttribute("class", "correcto");
        

    }else{
       
        btn.setAttribute("class", "incorrecto");
      
    }
}