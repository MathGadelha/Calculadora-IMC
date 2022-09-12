function calculo(){
    var nome = document.getElementById("nome").value;
    var idade = document.getElementById("idade").value;
    var tam = document.getElementById("tam").value;
    var peso = document.getElementById("peso").value;
    var foto = document.getElementById("foto-peso");


    var tamM = tam/100; 

    var tam2 = tamM*tamM;

    var IMC = peso/tam2;
    console.log(IMC);

if(IMC < 18.5){

    foto.innerHTML = `
    <img class="foto-baixo" src="abaixo-do-peso.jpg" >
    
    `
    console.log(IMC);
    }   else if( IMC >= 18.5 && IMC <=24.9){
    
      foto.innerHTML = `
    <img class="foto-normal" src="peso-normal.jpg" >
    `
      console.log(IMC);
    }
      else if( IMC >= 25 && IMC <=29.9){
    
          foto.innerHTML = `
    <img class="foto-acp" src="acima-do-peso.jpg" >
    `
    console.log(IMC);
    }
      else if( IMC >= 30 && IMC <=39.9){
    
          foto.innerHTML = `
    <img class="foto-ob2" src="obesidade2.jpg" >
    `
    console.log(IMC);
    }
      else if( IMC >= 40){
    
          foto.innerHTML = `
    <img class="foto-ob3" src="obesidade3.jpg" >
    `
    console.log(IMC);
      }
      else{
        
      }


}

