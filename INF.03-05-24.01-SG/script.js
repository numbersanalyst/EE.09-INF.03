function CountPrice() {
    let price = 0;
    if (document.getElementById("peeling").checked) price += 45;
    if (document.getElementById("maska").checked) price += 30;
    if (document.getElementById("masaz").checked) price += 20;
    if (document.getElementById("makijaz").checked) price += 50;
    document.getElementById('price').innerText = `Cena zabiegów: ${price}`;
}