//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

    uno = document.getElementById("uno")
    dos = document.getElementById("dos")
    tres = document.getElementById("tres")
    cuatro = document.getElementById("cuatro")
    cinco = document.getElementById("cinco")
    seis = document.getElementById("seis")
    siete = document.getElementById("siete")
    ocho = document.getElementById("ocho")
    nueve = document.getElementById("nueve")
    cero = document.getElementById("cero")
    salida = document.getElementById("salida")
    reset = document.getElementById("reset")


    //Aosciar la ejecucion de una funcion al evento cli

    uno.addEventListener("click",function(){


      valor = uno.value
         
        let span = document.createElement("span")
        span.innerHTML = valor
        salida.appendChild(span)
   
    })

    dos.addEventListener("click",function(){


        valor = dos.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    tres.addEventListener("click",function(){


        valor = tres.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    cuatro.addEventListener("click",function(){


        valor = cuatro.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    cinco.addEventListener("click",function(){


        valor = cinco.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    seis.addEventListener("click",function(){


        valor = seis.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    siete.addEventListener("click",function(){


        valor = siete.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    ocho.addEventListener("click",function(){


        valor = ocho.value
           
          let span = document.createElement("span")
          span.innerHTML = valor
          salida.appendChild(span)
     
    })
    nueve.addEventListener("click",function(){


        valor = nueve.value
           
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

    
    reset.addEventListener("click",function(){
      salida.innerHTML= ""
      //var eliminar = document.getElementById("salida")
     // eliminar.parentNode.removeChild(eliminar)
    // location.reload();

    })



})
