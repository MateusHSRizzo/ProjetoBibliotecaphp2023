let nome = document.getElementById("nome")
let rua = document.getElementById("rua")
let bairro = document.getElementById("bairro")
let cidade = document.getElementById("cidade")
let uf = document.getElementById("uf")
let tel = document.getElementById("tel")
let email = document.getElementById("email")
let cnpj = document.getElementById("cnpj")

let minChar = 2
let Tel_min = 10
let Tel_max = 14
let CNPJ_max = 18
let CNPJ_min = 14

document.querySelector("form").addEventListener("submit", function(event){
    if(nome.value === "" || rua.value === "" || bairro.value === "" || cidade.value === "" || uf.value === "" || tel.value === "" || email.value === "" || cnpj.value === ""){
        event.preventDefault();
        alert("Campos não podem estar vazio!")
    }else if(nome.value.length < minChar || rua.value.length < minChar || bairro.value.length < minChar || cidade.value.length < minChar || uf.value.length < minChar || email.value.length < minChar){
        event.preventDefault();
        alert("Os campos não podem conter menos de " + minChar + " caracteres!")
    }
    if(tel.value.length < Tel_min || tel.value.length > Tel_max){
        event.preventDefault();
        alert("Telefone com tamanho incorrespondente!")
    }
    if(cnpj.value.length < CNPJ_min || cnpj.value.length > CNPJ_max){
        event.preventDefault();
        alert("CNPJ com tamanho incorrespondente!")
    }
})