const btns = document.querySelectorAll('.header__btn');
const modalOverlay = document.querySelector('.modals__overlay');
const modals = document.querySelectorAll('.modal');
const closeBtn = document.querySelectorAll('.btn__close');

btns.forEach((el) => {
    el.addEventListener('click', (e) => {
        let path = e.currentTarget.getAttribute('data-path');

        modals.forEach((el) => {
            el.classList.remove('modals__visible');
        })

        document.querySelector(`[data-target="${path}"]`).classList.add('modals__visible');
		modalOverlay.classList.add('modals__overlay__visible');
    })
})

modalOverlay.addEventListener('click', (e) => {
    if(e.target == modalOverlay) {
        modalOverlay.classList.remove('modals__overlay__visible');
        modals.forEach((el) => {
            el.classList.remove('modals__visible');
        })
    }
})

closeBtn.forEach((el) => {
    el.addEventListener('click', (e) => {
        modalOverlay.classList.remove('modals__overlay__visible');
        modals.forEach((el) => {
            el.classList.remove('modals__visible');
        })
    })
})
