var id = 1;

const btns = document.querySelectorAll('.n-btn')
const prevBtn = btns[0]
const nextBtn = btns[1]

const currImg = document.querySelector('.main-img')

const prevImgs = document.querySelectorAll('.prev')

const changePhoto = (photoName, pref = ".jpg") => {
    currImg.src = photoName + pref;
}

const nextId = () => {
    if (id < 5) {
        id++;
    } else {
        id = 1;
    }
}

const prevId = () => {
    if (id > 1) {
        id--;
    } else {
        id = 5;
    }
}

prevBtn.addEventListener('click', () => {
    prevId();
    changePhoto(id);
});

nextBtn.addEventListener('click', () => {
    nextId();
    changePhoto(id);
})

prevImgs.forEach(img => {
    img.addEventListener('click', (e) => {
        let photo = e.target.src;
        changePhoto(photo, "")
    })
});