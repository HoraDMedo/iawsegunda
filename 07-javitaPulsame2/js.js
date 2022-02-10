//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

        let PulsaBTN
        // asociar un elemento html en JS

        let anterior = 0
        let siguiente = 1
        let final


        PulsaBTN = document.getElementById("PulsaBTN")
        let salida= document.getElementById("salida")
        let salida2= document.getElementById("salida2")
  
        //Aosciar la ejecucion de una funcion al evento cli

        PulsaBTN.addEventListener("click",function(){
 


                final = siguiente + anterior
                anterior = siguiente
                siguiente = final

        let span = document.createElement("span")
        span.innerHTML = final + " "
        salida.appendChild(span)

       // final = siguiente + anterior
       // anterior = siguiente
       // siguiente = final
        

        salida2.innerHTML = final

             //  let final = anterior + siguiente           

        })

})




