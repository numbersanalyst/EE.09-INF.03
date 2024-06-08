function generate () {
    let a1 = parseInt(document.getElementById('a1').value);
    let r = parseInt(document.getElementById('r').value);
    let n = parseInt(document.getElementById('n').value);
    let res = 'Ciąg arytmetyczny zawiera wyrazy: ';

    for (let i = 0; i < n; i++) {
        res += (a1 + r * i) + ', ';
    }

    document.getElementById('res').innerHTML = res;
}