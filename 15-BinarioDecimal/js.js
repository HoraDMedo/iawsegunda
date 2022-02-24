//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

    uno = document.getElementById("uno")
    cero = document.getElementById("cero")
  
    reset = document.getElementById("reset")


    //Aosciar la ejecucion de una funcion al evento cli

    uno.addEventListener("click",function(){


       valor = uno.value
         
        let span = document.createElement("span")
        span.innerHTML = valor
        salida.appendChild(span)
   
    })

    cero.addEventListener("click",function(){


        valor = cero.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })

 toString([radix])


})
