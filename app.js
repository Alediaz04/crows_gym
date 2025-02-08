//Hacer que al pasar el mouse por encima de la tienda se muestre todo el texto describiendo el producto a vender
//la logica basica pensada seria con addeventlistener que tenga un mousemove se active una funcion que cambie el display del texto de none a block

//Forma con ID
//Funciona solo con un cuadro, para dos usar query selector
// let texto = document.getElementById('textOcult');
// let cuadro = document.querySelector('.cuadro');

// cuadro.addEventListener('mouseover', function () {
//     texto.style.display = 'block';  
//     cuadro.style.height = '750px';  
// });

// cuadro.addEventListener('mouseout', function () {
//     texto.style.display = 'none';   
//     cuadro.style.height = '600px';  
// });

//Forma con query selector

document.addEventListener('DOMContentLoaded', function(){
let cuadros = document.querySelectorAll('.cuadro')

cuadros.forEach(cuadro => {
    let texto = cuadro.querySelector('.texto')

    cuadro.addEventListener('mouseover', function () {
        texto.style.display = 'block';  
        cuadro.style.height = 'auto';  
    });
    
    cuadro.addEventListener('mouseout', function () {
        texto.style.display = 'none';   
        cuadro.style.height = '600px';  
    });
})
})
