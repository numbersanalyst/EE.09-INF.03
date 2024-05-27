const rozmiarTekstu = document.querySelector("#rozmiarTekstu")
const stylTekstu = document.querySelector("#stylTekstu")
const tekst = document.querySelector("#tekst")

const formatuj = (kolor) => {
    tekst.style.fontSize = rozmiarTekstu.value+"%"
    tekst.style.fontStyle = stylTekstu.value
    tekst.style.color = kolor
}

document.querySelector(".btn-pierwszy").addEventListener("click", ()=> {formatuj("red")})
document.querySelector(".btn-drugi").addEventListener("click", ()=> {formatuj("green")})
document.querySelector(".btn-trzeci").addEventListener("click", ()=> {formatuj("blue")})