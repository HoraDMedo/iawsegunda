//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

    buttonsum = document.getElementById("buttonsum")
    buttonres = document.getElementById("buttonres")
    buttondiv = document.getElementById("buttondiv")
    buttonmul = document.getElementById("buttonmul")
    salida = document.getElementById("salida")

    numero1 = document.getElementById("numero1")
    numero2 = document.getElementById("numero2")


    //Aosciar la ejecucion de una funcion al evento cli

    buttonsum.addEventListener("click",function(){


        let inputValue1 = parseInt(numero1.value); 
        let inputValue2 = parseInt(numero2.value);

        let inputValue3 = inputValue1 + inputValue2
    

        let h1 = document.createElement("td")
        h1.innerHTML = inputValue3
        salida.innerHTML = inputValue3
   
   //  let final = anterior + siguiente           


   buttonres.addEventListener("click",function(){


    let inputValue1 = parseInt(numero1.value); 
    let inputValue2 = parseInt(numero2.value);

    let inputValue3 = inputValue1 - inputValue2


    let h1 = document.createElement("td")
    h1.innerHTML = inputValue3
    salida.innerHTML = inputValue3
})

    buttondiv.addEventListener("click",function(){


        let inputValue1 = parseInt(numero1.value); 
        let inputValue2 = parseInt(numero2.value);
    
        let inputValue3 = inputValue1 / inputValue2
    
    
        let h1 = document.createElement("td")
        h1.innerHTML = inputValue3
        salida.innerHTML = inputValue3

    })

    buttonmul.addEventListener("click",function(){


        let inputValue1 = parseInt(numero1.value); 
        let inputValue2 = parseInt(numero2.value);
    
        let inputValue3 = inputValue1 * inputValue2
    
    
        let h1 = document.createElement("td")
        h1.innerHTML = inputValue3
        salida.innerHTML = inputValue3





    })
    
   
})

})
