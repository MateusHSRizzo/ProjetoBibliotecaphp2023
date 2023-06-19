let nome = document.getElementById("nome")
let minChar = 3

document.querySelector("form").addEventListener("submit", function(event){
    if(nome.value === ""){
        event.preventDefault();
        alert("O nome não pode estar vazio")
    }else if(nome.value.length < minChar){
        event.preventDefault();
        alert("O nome não pode conter menos de " + minChar + " caracteres!")
    }
})
