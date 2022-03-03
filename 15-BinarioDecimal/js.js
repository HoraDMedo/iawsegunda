//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

    uno = document.getElementById("uno")
    cero = document.getElementById("cero")
  
    reset = document.getElementById("reset")
    salida = document.getElementById("salida")
   
  

    //Aosciar la ejecucion de una funcion al evento cli

    uno.addEventListener("click",function(){


       valor = uno.value
         
        let span = document.createElement("span")
        span.innerHTML = valor
        salida.appendChild(span)

        valor2= valor2 + valor
   
    })

    cero.addEventListener("click",function(){
       
        valor = cero.value
        let span = document.createElement("span")
        span.innerHTML = valor
        salida.appendChild(span)

       valor2="valor2+span.value"
         
     
    })

    cero.addEventListener("click",function(){
        document.write(valor);
        let valor = cero.value
        let valor2 = valor2 + valor
       
         
     
    })

    reset.addEventListener("click",function(){
        
      
        numeros=Number(salida.innerText)
        numero2=parseInt(numeros, 2)
        alert(numero2)

            
    })       




})
