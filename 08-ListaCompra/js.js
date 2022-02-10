//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

        // asociar un elemento html en JS

        let addBTN = document.getElementById("addBTN")
        let salida= document.getElementById("salida")
        let salida2= document.getElementById("salida2")
        let texto = document.getElementById("texto")
        let numero = document.getElementById("numero")

        //Aosciar la ejecucion de una funcion al evento cli

        addBTN.addEventListener("click",function(){

       
        if (texto.value != "" && numero.value != ""){
              
                for (let i=0; i < numero.value; i++){
                        let li = document.createElement("li")
                        li.innerHTML =  texto.value
                        salida2.appendChild(li)
                     
                }
                
                document.getElementById("formulario").reset()
        }

       // final = siguiente + anterior
       // anterior = siguiente
       // siguiente = final

               

        })




})




