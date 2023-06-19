let nome = document.getElementById("nome")
let cpf = document.getElementById("cpf")
let tel = document.getElementById("telefone")
let rua = document.getElementById("rua")
let bairro = document.getElementById("bairro")

let minChar = 3
let CPF_min = 11
let CPF_max = 14
let Tel_min = 10
let Tel_max = 14

document.querySelector("form").addEventListener("submit", function(event){
    if(nome.value === "" || rua.value === "" || bairro.value === "" || cpf.value === "" || tel.value === ""){
        event.preventDefault();
        alert("Campos não podem estar vazio!")
    }else if(nome.value.length < minChar || rua.value.length < minChar || bairro.value.length < minChar){
        event.preventDefault();
        alert("Os campos não podem conter menos de " + minChar + " caracteres!")
    }
    if(cpf.value.length < CPF_min || cpf.value.length > CPF_max){
        event.preventDefault();
        alert("CPF com tamanho incorrespondente!")
    }
    if(tel.value.length < Tel_min || tel.value.length > Tel_max){
        event.preventDefault();
        alert("Telefone com tamanho incorrespondente!")
    }
})