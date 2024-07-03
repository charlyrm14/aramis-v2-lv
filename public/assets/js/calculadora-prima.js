let btnAgregarAsegurado = document.querySelector('#btn-add-asegurado-clc');

btnAgregarAsegurado.addEventListener('click', (event) => {
    event.preventDefault();
    
    const containerAsegurados = document.querySelector('.container-asegurados-clc');

    const divColLeft = document.createElement('div');
    divColLeft.classList.add('col-md-6', 'fv-row', 'fv-plugins-icon-container', 'my-3');

    const divColRight = document.createElement('div');
    divColRight.classList.add('col-md-6', 'fv-row', 'fv-plugins-icon-container', 'p-0');

    const selectAsegurado = document.createElement('select');
    selectAsegurado.classList.add('form-select', 'form-select-solid');
    selectAsegurado.setAttribute('data-control', 'select2');
    selectAsegurado.setAttribute('data-hide-search', 'true');

    const inputDate = document.createElement('input');
    inputDate.classList.add('form-control', 'form-control-solid', 'ps-12', 'mt-3');
    inputDate.setAttribute('placeholder', 'Selecciona fecha');

    const divContainerInput = document.createElement('div');
    divContainerInput.classList.add('position-relative', 'd-flex', 'align-items-center');

    const spanIconInput = document.createElement('i');
    spanIconInput.classList.add('ki-outline', 'ki-calendar-8', 'fs-2', 'position-absolute', 'mx-4');

    const optionContratante = document.createElement('option');
    const optionConyuge = document.createElement('option');
    const optionHijo = document.createElement('option');


    optionContratante.value = 9;
    optionContratante.text = 'Contratante';
    optionConyuge.value = 2;
    optionConyuge.text = 'Conyuge';
    optionHijo.value = 3;
    optionHijo.text = 'Hijo';

    selectAsegurado.appendChild(optionContratante);
    selectAsegurado.appendChild(optionConyuge);
    selectAsegurado.appendChild(optionHijo);



    divColLeft.appendChild(selectAsegurado);

    divContainerInput.appendChild(spanIconInput);
    divContainerInput.appendChild(inputDate);
    divColRight.appendChild(divContainerInput);

    containerAsegurados.appendChild(divColLeft);
    containerAsegurados.appendChild(divColRight);

});