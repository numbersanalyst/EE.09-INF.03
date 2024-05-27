const prawy = document.getElementById('prawy')
const obraz = document.getElementById('obraz')
const lista = document.getElementById('lista')

const kolorBg = (kolor) => {
    prawy.style.backgroundColor = kolor
}

const kolorTekstu = (kolor) => {
    prawy.style.color = kolor
}

const zmienObramowanie = (zaznaczony) => {
    if (zaznaczony) {
        obraz.style.border = null
    } else {
        obraz.style.border = "none"
    }
}

const rozmiarTekstu = (rozmiar) => {
    prawy.style.fontSize = rozmiar
} 

const stylListy = (styl) => {
    lista.style.listStyleType = styl
}
