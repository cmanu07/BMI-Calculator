const greutate = document.getElementById('greutate').value;
const inaltime = document.getElementById('inaltime').value;
const spanGreutate = document.querySelector('#greutateSpan');
const spanInaltime = document.querySelector('#inaltimeSpan');

(inaltime.length === 0) ? spanInaltime.classList.add('span-off') : spanInaltime.classList.remove('span-off');
(greutate.length !== 0) ? spanGreutate.classList.add('span-kg') : spanGreutate.classList.add('span-off');

const BMI = 87 / Math.pow(178, 2) * 10000;
console.log(BMI);