//alert("Hola mund");
//document.writeln("Hola soy JS")


window.addEventListener("load",function(){

  numeros = document.getElementById("numeros")
  frase = document.getElementById("frase")
  boton = document.getElementById("boton")
  salida = document.getElementById("salida")

 

       
  
  //  valor=Math.random(1)
   // alert(valor)

    //Aosciar la ejecucion de una funcion al evento cli

    boton.addEventListener("click",function(){

      for (let i = 0; i < numeros.value; i++) {

          simbolos = "0123456789ABCDEF";
          color = "#";
          color2 = "#"

          for(b = 0; b < 6; b++){
              color = color + simbolos[Math.floor(Math.random() * 16)];
            } 

          for(c = 0; c < 6; c++){
              color2 = color2 + simbolos[Math.floor(Math.random() * 16)];
            } 


        li = document.createElement("li")
        li.innerHTML = frase.value
        li.className = "li"
        li.style.backgroundColor = color
        li.style.color = color2
        salida.appendChild(li)

     }
          
            

           

   
    })
    

    

  })




