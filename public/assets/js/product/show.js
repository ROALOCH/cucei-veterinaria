function _submit(type) {
    let max = $('#stock').text(),
        quantity = $('#quantity')[0].value;

    if(type == 'service' || parseInt(quantity) <= parseInt(max)) {
        $('#submit').click();
    } else {
        alert('Excedio el número de existencias');
    }
}
