//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){
  texto = document.getElementById("texto")

  circunferencia = document.getElementById("circunferencia")
  circulo = document.getElementById("circulo")
  esfera = document.getElementById("esfera")

  BTNuno = document.getElementById("BTNuno")

  salida = document.getElementById("salida")

    //Aosciar la ejecucion de una funcion al evento cli

    BTNuno.addEventListener("click",function(){
      salida.innerHTML = ""


      if(circunferencia.checked){
        
        calculocircu=2 * 3.14 * texto.value
        h3 = document.createElement("h3")
        h3.innerHTML = "La Longitud es " + calculocircu
        h3.className = "h3"
        salida.appendChild(h3)
    

      }
      
    if(circulo.checked){
     
      calculocir=(3.14 * (texto.value*texto.value))

      h3 = document.createElement("h3")
      h3.innerHTML = "El volumen es " + calculocir
      h3.className = "h3"
      salida.appendChild(h3)
  
  
 
       }


       if(esfera.checked){

        calculocir=(4/3 * 3.14 * (texto.value*texto.value*texto.value))

        h3 = document.createElement("h3")
        h3.innerHTML = "El area es " + calculocir
        h3.className = "h3"
        salida.appendChild(h3)

 
       }
      
       if(!esfera.checked && !circulo.checked && !circunferencia.checked){

        salida.innerHTML = "Poh favor selecciona un cálculo"

       }



    })

         
    


   



    

  })




