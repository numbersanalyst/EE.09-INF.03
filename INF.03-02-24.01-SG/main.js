function wyslij() {
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let email = document.getElementById('email').value.toLowerCase();
    let zgloszenie = document.getElementById('zgloszenie').value;
    let komunikat = document.getElementById('komunikat');
    
    komunikat.innerHTML = `${imie} ${nazwisko}<br>${email}<br>Usługa: ${zgloszenie}`;
}