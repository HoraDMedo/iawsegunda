window.addEventListener("load",function(){

    uno = document.getElementById("uno")
    dos = document.getElementById("dos")
    tres = document.getElementById("tres")
    salida = document.getElementById("salida")

    

    tres.addEventListener("click",function(){
 
     
      for (let i=0; i < uno.value; i++){

          simbolos = "0123456789ABCDEF";
          color = "#";

              for(b = 0; b < 6; b++){
                color = color + simbolos[Math.floor(Math.random() * 16)];
              }  
              
           color2 = "#";

              for(b = 0; b < 6; b++){
                color2 = color2 + simbolos[Math.floor(Math.random() * 16)];
              }   

            
            let h1 = document.createElement("h1")
            h1.innerHTML = dos.value
            h1.className = "nombrecito"
            h1.style.backgroundColor = color
            h1.style.color = color2
            salida.appendChild(h1)
  
      }
    




  })


})

