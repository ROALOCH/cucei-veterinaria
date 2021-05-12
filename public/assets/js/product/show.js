function _submit(type) {
    let max = parseInt($('#stock').text()),
        quantity = parseInt($('#quantity')[0].value);
    if(quantity === 0) {
        alert('Debe agregar por lo menos un articulo');
        return;
    }
    if(type == 'service' || quantity <= max) {
        $('#submit').click();
    } else {
        alert('Excedio el número de existencias');
    }
}
