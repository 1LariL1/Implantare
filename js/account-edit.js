let 
    btnEdit = document.querySelector('.account-but-edit'),
    btnClose = document.querySelector('.account-but-close'),
    info = document.querySelector('.info'),
    edit = document.querySelector('.info-box-edit');

function showEdit() { //функция показать блок
    info.classList.add('info-hide'); //при нажатии на кнопку добавляется новый класс
    edit.classList.remove('info-hide'); //при нажатии на кнопку убирается класс
}

function showInfo() { //функция показать блок
    edit.classList.add('info-hide'); //при нажатии на кнопку добавляется новый класс
    info.classList.remove('info-hide'); //при нажатии на кнопку убирается класс
}


btnEdit.addEventListener('click', showEdit);              //далее: функции срабатывают при нажатии на определенные кнопки
btnClose.addEventListener('click', showInfo);
