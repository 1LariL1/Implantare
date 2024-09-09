let 
    btnReg = document.querySelector('.open-reg'),
    btnLog = document.querySelector('.open-auth'),
    reg = document.querySelector('.reg-form'),
    log = document.querySelector('.auth-form');


function showReg() { //функция показать блок
    log.classList.add('form-hide'); //при нажатии на кнопку добавляется новый класс
    reg.classList.remove('form-hide'); //при нажатии на кнопку убирается класс
}

function showLog() { //функция показать блок
    reg.classList.add('form-hide'); //при нажатии на кнопку убирается класс
    log.classList.remove('form-hide'); //при нажатии на кнопку добавляется новый класс
}


btnReg.addEventListener('click', showReg);              //далее: функции срабатывают при нажатии на определенные кнопки
btnLog.addEventListener('click', showLog);

