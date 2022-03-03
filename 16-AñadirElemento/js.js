//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){


    liBTN = document.getElementById("liBTN")
    salida = document.getElementById("salida")
  

    //Aosciar la ejecucion de una funcion al evento cli

    liBTN.addEventListener("mouseenter",function(){
        
        
        li = document.createElement('li')
        li.innerHTML = "Entrada"
        salida.appendChild(li)
 
    })

     liBTN.addEventListener("mouseout",function(){
       
    
        li = document.createElement('li')
        li.innerHTML = "Salida"
        salida.appendChild(li)
         
 
    
     })






})
