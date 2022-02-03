//alert("Hola mund");
//document.writeln("Hola soy JS")
window.addEventListener("load",function(){

        let PulsaBTN
        let numClicks = 0
        // asociar un elemento html en JS

        PulsaBTN = document.getElementById("PulsaBTN")
        numClicks = document.getElementById("numClicks")
        //Aosciar la ejecucion de una funcion al evento cli

        PulsaBTN.addEventListener("click",function(){
        numClicks = numClicks + 1
        alert("Me has pulsado")
        alert(numClicks) 

        })




})




