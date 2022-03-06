//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

    uno = document.getElementById("uno")
    dos = document.getElementById("dos")
    salida = document.getElementById("salida")

    
  
  //  valor=Math.random(1)
   // alert(valor)

    //Aosciar la ejecucion de una funcion al evento cli

    uno.addEventListener("click",function(){
     
      valor=dos.value

      for (let i=0; i < valor; i++){

        value=parseInt(Math.random() * 10)

              if(value > 5){

              let li = document.createElement("button")
              li.innerHTML = "x"
              li.className = "rojo"
              salida.appendChild(li)
              }else{
              let li = document.createElement("button")
              li.innerHTML = "o"
              li.className = "verde"
              salida.appendChild(li)
              }
             

          for (let i=1; i < valor; i++){

            value=parseInt(Math.random() * 10)

            if(value > 8){

            let li = document.createElement("button")
            //   li.className = "verde" Vale esta o la de abajo por igual
            li.classList.add("rojo");
            li.innerHTML = "x"
            salida.appendChild(li)
            }else{
            let li = document.createElement("button")
            //li.className = "verde" Vale esta o la de abajo por igual
            li.classList.add("verde");
            li.innerHTML = "o"
            salida.appendChild(li)
            }
         
            
          }

          for (let i=0; i < 1; i++){

            let br = document.createElement("br")
            br.innerHTML = ""
            salida.appendChild(br)

          }



  
        } 
    


   
    })


    

  })




