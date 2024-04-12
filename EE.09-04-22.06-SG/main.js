var id = 0;
const updateBtns = document.querySelectorAll('.update-btn');
const orderBtns = document.querySelectorAll('.order-btn');
const productNames = document.querySelectorAll('.name');
const amounts = document.querySelectorAll('.amount');

const checkAmount = () => {
    amounts.forEach(e => {
        let value = e.innerHTML;

        if (value == 0) {
            e.style.backgroundColor = 'red';
        } else if (value >= 1 && value <= 5) {
            e.style.backgroundColor = 'yellow';
        } else {
            e.style.backgroundColor = 'honeydew';
        }
    });
}

updateBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        let newAmount = prompt('Podaj nową ilość');
        amounts[i].innerHTML = newAmount;

        checkAmount();
    });
});

orderBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        alert(`Zamównienie nr: ${id++} Produkt ${productNames[i].innerHTML}`)
    })
})

checkAmount();