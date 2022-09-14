const greutate = document.getElementById('greutate');
const inaltime = document.getElementById('inaltime');
const spanGreutate = document.querySelector('#greutateSpan');
const spanInaltime = document.querySelector('#inaltimeSpan');

greutate.addEventListener('keyup', () => {
    spanGreutate.classList.replace('span-off', 'span-kg');
})
inaltime.addEventListener('keyup', () => {
    spanInaltime.classList.replace('span-off', 'span-cm');
})