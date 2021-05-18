function _submit(type) {
    let max = parseInt($('#stock').text()),
        quantity = parseInt(document.getElementById('quantity').value);
    if(quantity === 0) {
        alert('Debe agregar por lo menos un articulo');
        return;
    }
    if(type == 'service' || quantity <= max) {
        $('#submit').click();
    } else {
        alert('Excedio el número de existencias');
        document.getElementById('quantity').value = max;
    }
}
