//var resposta = confirm("Deseja excluir");

//console.log(resposta);

const a = 10;
const b = 20;


function soma(a,b){
   return parseInt(a)+parseInt(b);
}

//console.log(soma(20,30));

document.querySelector("#calcular").addEventListener("click",function(){
    let valorA = document.querySelector("#valorA").value;
    let valorB = document.querySelector("#valorB").value;
    if(valorA.length>0 && valorB.length>0){
        alert(soma(valorA,valorB));
    }else{
        alert("Digite um valor");
    }
});