function wyslij () {
    let regulamin = document.getElementById('regulamin').checked;
    let wynik = document.getElementById('wynik');

    if (!regulamin) {
        wynik.style.color = "red";
        wynik.innerHTML = "Musisz zapoznać się z regulaminem";
    } else {
        let imie = document.getElementById('imie').value.toUpperCase();
        let nazwisko = document.getElementById('nazwisko').value.toUpperCase();
        let zgloszenie = document.getElementById('zgloszenie').value;
        wynik.style.color = "navy";
        wynik.innerHTML = `${imie} ${nazwisko}<br> Treść Twojej sprawy: ${zgloszenie}`;
    }
}