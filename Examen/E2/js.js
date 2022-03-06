//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){
  normal = document.getElementById("normal")
  bueno = document.getElementById("bueno")
  excelente = document.getElementById("excelente")

  texto = document.getElementById("texto")
  BTNuno = document.getElementById("BTNuno")

  boton = document.getElementById("boton")
  salida = document.getElementById("salida")

    //Aosciar la ejecucion de una funcion al evento cli

    BTNuno.addEventListener("click",function(){

  //  alert(normal.value)
   // alert(bueno.value)
  //  alert(excelente.value)

      if(normal.checked){
     
    
        salida.innerHTML = texto.value
    

      }
      
    if(bueno.checked){

      valor=texto.value * 0.10
      valor1=parseInt(texto.value)
      valorf=valor1 + valor
  
      salida.innerHTML = valorf
  
 
       }


       if(excelente.checked){
     
        valor=texto.value * 0.20
        valor1=parseInt(texto.value)
        valorf=valor1 + valor
    
        salida.innerHTML = valorf

 
       }
      
      



    })

         
    


   



    

  })




