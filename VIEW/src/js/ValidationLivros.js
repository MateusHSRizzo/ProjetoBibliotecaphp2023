let nome = document.getElementById("nome")
let n_paginas = document.getElementById("npaginas")
let anolanc = document.getElementById("anolancamento")
let autor = document.getElementById("autor")
let editora = document.getElementById("editora")

let minChar = 3
let Ano_min = 4

document.querySelector("form").addEventListener("submit", function(event){
    if(nome.value === "" || n_paginas.value === "" || anolanc.value === "" || autor.value === "" || editora.value === ""){
        event.preventDefault();
        alert("Campos não podem estar vazio!")
    }else if(nome.value.length < minChar || autor.value.length < minChar || editora.value.length < minChar){
        event.preventDefault();
        alert("Os campos não podem conter menos de " + minChar + " caracteres!")
    }
    if(anolanc.value.length < Ano_min){
        event.preventDefault();
        alert("Ano com tamanho incorrespondente!")
    }
    if(n_paginas == 0){
        event.preventDefault();
        alert("N. de Paginas com tamanho incorrespondente!")
    }
})